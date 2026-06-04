<?php
/**
 * Admin interface for Custom API Endpoint plugin.
 *
 * Settings page for API key management, access logs, and configuration.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Custom_API_Admin {

	private Custom_API_Auth $auth;
	private string $plugin_slug = 'custom-api-endpoint';

	public function __construct() {
		$this->auth = new Custom_API_Auth();
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
		add_action( 'wp_ajax_cap_add_key', array( $this, 'ajax_add_key' ) );
		add_action( 'wp_ajax_cap_revoke_key', array( $this, 'ajax_revoke_key' ) );
		add_action( 'wp_ajax_cap_toggle_key', array( $this, 'ajax_toggle_key' ) );
		add_action( 'wp_ajax_cap_clear_logs', array( $this, 'ajax_clear_logs' ) );
	}

	public function add_admin_menu(): void {
		add_options_page(
			__( 'Custom API Endpoint', 'custom-api-endpoint' ),
			__( 'Custom API Endpoint', 'custom-api-endpoint' ),
			'manage_options',
			$this->plugin_slug,
			array( $this, 'render_settings_page' )
		);
	}

	public function enqueue_admin_assets( string $hook ): void {
		if ( strpos( $hook, $this->plugin_slug ) === false ) {
			return;
		}
		?>
		<style>
			.cap-wrap { max-width: 1000px; }
			.cap-card { background: #fff; border: 1px solid #ccd0d4; border-radius: 4px; padding: 20px; margin-bottom: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.04); }
			.cap-card h2 { margin-top: 0; }
			.cap-card h3 { margin: 20px 0 8px 0; font-size: 15px; }
			.cap-card h3:first-of-type { margin-top: 0; }
			.cap-card p { margin: 0 0 10px 0; }
			.cap-table { width: 100%; border-collapse: collapse; }
			.cap-table th, .cap-table td { text-align: left; padding: 10px 12px; border-bottom: 1px solid #eee; vertical-align: top; }
			.cap-table th { background: #f9f9f9; font-weight: 600; white-space: nowrap; }
			.cap-table code { font-size: 12px; background: #f0f0f1; padding: 2px 6px; border-radius: 3px; }
			.cap-badge { display: inline-block; padding: 2px 8px; border-radius: 10px; font-size: 11px; font-weight: 600; }
			.cap-badge-active { background: #d4edda; color: #155724; }
			.cap-badge-inactive { background: #f8d7da; color: #721c24; }
			.cap-perm-tag { display: inline-block; background: #e8f0fe; color: #1967d2; padding: 1px 6px; border-radius: 3px; font-size: 11px; margin-right: 4px; margin-bottom: 2px; }
			.cap-log-table { font-size: 13px; }
			.cap-endpoint-url { background: #f0f0f1; padding: 10px 14px; border-radius: 3px; font-family: monospace; font-size: 13px; word-break: break-all; }
			.cap-section { margin-top: 16px; }
			.cap-btn { cursor: pointer; }
			.cap-btn-danger { color: #b32d2e; border-color: #b32d2e; }
			.cap-inline-form { display: flex; gap: 10px; align-items: flex-end; flex-wrap: wrap; }
			.cap-inline-form label { font-weight: 600; display: block; margin-bottom: 4px; }
			.cap-pre { background: #1d2327; color: #d4d4d4; padding: 12px 16px; border-radius: 4px; overflow-x: auto; font-size: 12px; line-height: 1.6; margin: 8px 0 16px 0; font-family: "SFMono-Regular", Consolas, "Liberation Mono", Menlo, monospace; word-break: break-all; }
			.cap-pre .cap-comment { color: #6a9955; }
			.cap-pre .cap-arg { color: #9cdcfe; }
			.cap-pre .cap-val { color: #ce9178; }
			.cap-pre .cap-eq { color: #d4d4d4; }
			.cap-pre .cap-curl { color: #dcdcaa; }
			.cap-info-box { background: #e8f0fe; border: 1px solid #c4d7f5; border-radius: 4px; padding: 12px 16px; margin: 0 0 16px 0; font-size: 13px; }
			.cap-info-box strong { color: #1967d2; }
		</style>
		<?php
	}

	public function render_settings_page(): void {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'custom-api-endpoint' ) );
		}

		$endpoint_url = home_url( '/wp-api-proxy.php' );
		$keys         = $this->auth->get_all_keys();
		$logs         = $this->auth->get_logs( 50 );
		$permissions  = $this->auth->get_available_permissions();
		?>
		<div class="wrap cap-wrap">
			<h1><?php esc_html_e( 'Custom API Endpoint', 'custom-api-endpoint' ); ?></h1>

			<div class="cap-card">
				<h2><?php esc_html_e( 'Endpoint URL', 'custom-api-endpoint' ); ?></h2>
				<p><?php esc_html_e( 'This endpoint bypasses the InfinityFree firewall block on /wp-json/ by serving API responses from the WordPress root directory.', 'custom-api-endpoint' ); ?></p>
				<div class="cap-endpoint-url"><?php echo esc_url( $endpoint_url ); ?><strong style="color:#1967d2;">/posts</strong></div>
				<p><?php esc_html_e( 'Gunakan path-based URLs (RESTful style) untuk akses data. API key dikirim via query parameter', 'custom-api-endpoint' ); ?> <code>?api_key=</code>, <?php esc_html_e( 'header', 'custom-api-endpoint' ); ?> <code>X-API-Key:</code>, <?php esc_html_e( 'atau', 'custom-api-endpoint' ); ?> <code>Authorization: Bearer</code>.</p>
			</div>

			<div class="cap-card">
				<h2><?php esc_html_e( 'Cara Kerja & Penggunaan API', 'custom-api-endpoint' ); ?></h2>

				<div class="cap-info-box">
					<strong><?php esc_html_e( 'Mengapa ini berfungsi?', 'custom-api-endpoint' ); ?></strong><br>
					<?php esc_html_e( 'InfinityFree memblokir semua request ke path /wp-json/ di level firewall server. Plugin ini menempatkan endpoint PHP mandiri (wp-api-proxy.php) di root WordPress, di luar direktori /wp-json/. File ini menggunakan include_once(\'wp-load.php\') untuk me-load WordPress secara langsung tanpa melalui REST API routing layer, sehingga firewall InfinityFree tidak mengenalinya sebagai request REST API.', 'custom-api-endpoint' ); ?>
				</div>

				<h3><?php esc_html_e( 'Cara Otentikasi (3 Metode)', 'custom-api-endpoint' ); ?></h3>
				<table class="cap-table">
					<thead>
						<tr>
							<th><?php esc_html_e( 'Metode', 'custom-api-endpoint' ); ?></th>
							<th><?php esc_html_e( 'Contoh', 'custom-api-endpoint' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php esc_html_e( 'Query Parameter', 'custom-api-endpoint' ); ?></td>
							<td style="font-size:11px;"><code>?api_key=cap_xxxxxxxxxxxxxxxx</code></td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'HTTP Header', 'custom-api-endpoint' ); ?></td>
							<td style="font-size:11px;"><code>X-API-Key: cap_xxxxxxxxxxxxxxxx</code></td>
						</tr>
						<tr>
							<td><?php esc_html_e( 'Bearer Token', 'custom-api-endpoint' ); ?></td>
							<td style="font-size:11px;"><code>Authorization: Bearer cap_xxxxxxxxxxxxxxxx</code></td>
						</tr>
					</tbody>
				</table>

				<h3><?php esc_html_e( 'Daftar Endpoint (Path-Based)', 'custom-api-endpoint' ); ?></h3>
				<table class="cap-table">
					<thead>
						<tr>
							<th><?php esc_html_e( 'Endpoint', 'custom-api-endpoint' ); ?></th>
							<th><?php esc_html_e( 'Permission', 'custom-api-endpoint' ); ?></th>
							<th><?php esc_html_e( 'Fungsi', 'custom-api-endpoint' ); ?></th>
							<th><?php esc_html_e( 'Contoh URL / Parameter', 'custom-api-endpoint' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>GET /status</code></td>
							<td><em><?php esc_html_e( 'none', 'custom-api-endpoint' ); ?></em></td>
							<td><?php esc_html_e( 'Health check endpoint', 'custom-api-endpoint' ); ?></td>
							<td><code>/status</code></td>
						</tr>
						<tr>
							<td><code>GET /posts</code></td>
							<td><span class="cap-perm-tag">posts</span></td>
							<td><?php esc_html_e( 'List semua post/content', 'custom-api-endpoint' ); ?></td>
							<td style="font-size:11px;"><code>/posts</code> <br><code>/posts?type=page&amp;per_page=10</code> <br><code>/posts?search=keyword</code> <br><code>/posts?category=3</code></td>
						</tr>
						<tr>
							<td><code>GET /posts/{id}</code><br><code>GET /posts/{slug}</code></td>
							<td><span class="cap-perm-tag">posts</span></td>
							<td><?php esc_html_e( 'Detail satu post by ID atau slug', 'custom-api-endpoint' ); ?></td>
							<td style="font-size:11px;"><code>/posts/1</code><br><code>/posts/hello-world</code></td>
						</tr>
						<tr>
							<td><code>GET /post_types</code></td>
							<td><span class="cap-perm-tag">posts</span></td>
							<td><?php esc_html_e( 'Daftar custom post types', 'custom-api-endpoint' ); ?></td>
							<td><code>/post_types</code></td>
						</tr>
						<tr>
							<td><code>GET /taxonomies</code><br><code>GET /taxonomies/{pt}</code></td>
							<td><span class="cap-perm-tag">taxonomies</span></td>
							<td><?php esc_html_e( 'Daftar taxonomy yg terdaftar', 'custom-api-endpoint' ); ?></td>
							<td style="font-size:11px;"><code>/taxonomies</code><br><code>/taxonomies/post</code></td>
						</tr>
						<tr>
							<td><code>GET /terms</code></td>
							<td><span class="cap-perm-tag">taxonomies</span></td>
							<td><?php esc_html_e( 'Daftar terms dlm taxonomy', 'custom-api-endpoint' ); ?></td>
							<td style="font-size:11px;"><code>/terms?taxonomy=category</code></td>
						</tr>
						<tr>
							<td><code>GET /users</code></td>
							<td><span class="cap-perm-tag">users</span></td>
							<td><?php esc_html_e( 'Daftar user + roles', 'custom-api-endpoint' ); ?></td>
							<td style="font-size:11px;"><code>/users?role=administrator</code></td>
						</tr>
						<tr>
							<td><code>GET /seo/{id}</code></td>
							<td><span class="cap-perm-tag">seo</span></td>
							<td><?php esc_html_e( 'SEO metadata per post', 'custom-api-endpoint' ); ?></td>
							<td><code>/seo/1</code></td>
						</tr>
					</tbody>
				</table>

				<h3><?php esc_html_e( 'Contoh Request Lengkap', 'custom-api-endpoint' ); ?></h3>

				<div class="cap-pre"><span class="cap-comment"># Cek status endpoint (bypass auth)</span>
<span class="cap-curl">curl</span> <?php echo esc_html( $endpoint_url . '/status' ); ?>

<span class="cap-comment"># List 5 post terbaru dengan metadata + taksonomi</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts</span>?<span class="cap-arg">per_page</span><span class="cap-eq">=</span><span class="cap-val">5</span>&amp;<span class="cap-arg">include_meta</span><span class="cap-eq">=</span><span class="cap-val">1</span>&amp;<span class="cap-arg">include_taxonomies</span><span class="cap-eq">=</span><span class="cap-val">1</span>&amp;<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># Ambil satu post by ID (RESTful)</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts/1</span>?<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># Ambil satu post by slug</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts/hello-world</span>?<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># List posts dengan filter category</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts</span>?<span class="cap-arg">category</span><span class="cap-eq">=</span><span class="cap-val">3</span>&amp;<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># List pages</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts</span>?<span class="cap-arg">type</span><span class="cap-eq">=</span><span class="cap-val">page</span>&amp;<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># Cari post</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts</span>?<span class="cap-arg">search</span><span class="cap-eq">=</span><span class="cap-val">keyword</span>&amp;<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># Filter post by taxonomy + term</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts</span>?<span class="cap-arg">taxonomy</span><span class="cap-eq">=</span><span class="cap-val">category</span>&amp;<span class="cap-arg">term</span><span class="cap-eq">=</span><span class="cap-val">uncategorized</span>&amp;<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># List terms in taxonomy</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/terms</span>?<span class="cap-arg">taxonomy</span><span class="cap-eq">=</span><span class="cap-val">category</span>&amp;<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># List taxonomies for a post type</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/taxonomies/post</span>?<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># List users</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/users</span>?<span class="cap-arg">per_page</span><span class="cap-eq">=</span><span class="cap-val">10</span>&amp;<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># Ambil SEO metadata post (Yoast/RankMath/AIOSEO)</span>
<span class="cap-curl">curl</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/seo/1</span>?<span class="cap-arg">api_key</span><span class="cap-eq">=</span><span class="cap-val">YOUR_KEY</span>"

<span class="cap-comment"># Otentikasi via header (alternatif)</span>
<span class="cap-curl">curl</span> -<span class="cap-arg">H</span> <span class="cap-val">"X-API-Key: YOUR_KEY"</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts</span>"

<span class="cap-comment"># Otentikasi via Bearer token</span>
<span class="cap-curl">curl</span> -<span class="cap-arg">H</span> <span class="cap-val">"Authorization: Bearer YOUR_KEY"</span> "<?php echo esc_html( $endpoint_url ); ?><span class="cap-val">/posts</span>"</div>

				<h3><?php esc_html_e( 'Format Response', 'custom-api-endpoint' ); ?></h3>
				<p><?php esc_html_e( 'Semua response dikembalikan dalam format JSON. Response sukses memiliki struktur:', 'custom-api-endpoint' ); ?></p>
				<div class="cap-pre">{
  <span class="cap-val">"total"</span>: 10,
  <span class="cap-val">"page"</span>: 1,
  <span class="cap-val">"per_page"</span>: 5,
  <span class="cap-val">"total_pages"</span>: 2,
  <span class="cap-val">"results"</span>: [
    {
      <span class="cap-val">"id"</span>: 1,
      <span class="cap-val">"title"</span>: <span class="cap-val">"Hello World"</span>,
      <span class="cap-val">"slug"</span>: <span class="cap-val">"hello-world"</span>,
      <span class="cap-val">"type"</span>: <span class="cap-val">"post"</span>,
      <span class="cap-val">"status"</span>: <span class="cap-val">"publish"</span>,
      <span class="cap-val">"date"</span>: <span class="cap-val">"2026-01-15T10:00:00+00:00"</span>,
      <span class="cap-val">"modified"</span>: <span class="cap-val">"2026-01-15T10:00:00+00:00"</span>,
      <span class="cap-val">"excerpt"</span>: <span class="cap-val">"..."</span>,
      <span class="cap-val">"content"</span>: <span class="cap-val">"&lt;p&gt;...&lt;/p&gt;"</span>,
      <span class="cap-val">"link"</span>: <span class="cap-val">"https://..."</span>,
      <span class="cap-val">"featured_image"</span>: { <span class="cap-val">"full"</span>: <span class="cap-val">"..."</span>, ... },
      <span class="cap-val">"author"</span>: { <span class="cap-val">"id"</span>: 1, <span class="cap-val">"display_name"</span>: <span class="cap-val">"Admin"</span>, ... },
      <span class="cap-val">"comment_count"</span>: 0
    }
  ]
}</div>

			<?php if ( ! empty( $keys ) ) : ?>
				<div style="margin-top:16px;">
					<h3><?php esc_html_e( 'Daftar API Key Aktif', 'custom-api-endpoint' ); ?></h3>
					<?php foreach ( $keys as $key_str => $key_data ) : ?>
						<?php if ( ! empty( $key_data['enabled'] ) ) : ?>
							<div class="cap-info-box" style="margin-bottom:8px;">
								<strong><?php echo esc_html( $key_data['label'] ?? '' ); ?></strong><br>
								<code style="font-size:11px; word-break:break-all;"><?php echo esc_html( $key_str ); ?></code><br>
								<small style="color:#666;"><?php esc_html_e( 'Permissions:', 'custom-api-endpoint' ); ?> <?php echo esc_html( implode( ', ', $key_data['permissions'] ?? array() ) ); ?></small>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			</div>

			<div class="cap-card">
				<h2><?php esc_html_e( 'Add API Key', 'custom-api-endpoint' ); ?></h2>
				<div class="cap-inline-form">
					<div>
						<label for="cap-label"><?php esc_html_e( 'Label (e.g., "Mobile App", "External CRM")', 'custom-api-endpoint' ); ?></label>
						<input type="text" id="cap-label" class="regular-text" placeholder="<?php esc_attr_e( 'My Application', 'custom-api-endpoint' ); ?>">
					</div>
					<div>
						<label><?php esc_html_e( 'Permissions', 'custom-api-endpoint' ); ?></label>
						<div>
							<?php foreach ( $permissions as $perm ) : ?>
								<label style="margin-right:12px; font-weight:normal;">
									<input type="checkbox" class="cap-perm-check" value="<?php echo esc_attr( $perm ); ?>" checked>
									<?php echo esc_html( $perm ); ?>
								</label>
							<?php endforeach; ?>
						</div>
					</div>
					<div>
						&nbsp;<br>
						<?php wp_nonce_field( 'cap_add_key', 'cap_nonce' ); ?>
						<button type="button" id="cap-add-key-btn" class="button button-primary">
							<?php esc_html_e( 'Generate API Key', 'custom-api-endpoint' ); ?>
						</button>
					</div>
				</div>
				<div id="cap-new-key-result" style="margin-top:12px; display:none;">
					<div style="background:#d4edda; border:1px solid #c3e6cb; padding:12px; border-radius:4px;">
						<strong><?php esc_html_e( 'New API Key:', 'custom-api-endpoint' ); ?></strong>
						<code id="cap-new-key-value" style="font-size:13px; word-break:break-all;"></code>
						<p style="margin:8px 0 0 0; color:#666;">
							<?php esc_html_e( 'Copy this key now — it cannot be retrieved later.', 'custom-api-endpoint' ); ?>
						</p>
					</div>
				</div>
			</div>

			<div class="cap-card">
				<h2><?php esc_html_e( 'API Keys', 'custom-api-endpoint' ); ?></h2>
				<?php if ( empty( $keys ) ) : ?>
					<p><?php esc_html_e( 'No API keys configured. Add one above to get started.', 'custom-api-endpoint' ); ?></p>
				<?php else : ?>
					<table class="cap-table">
						<thead>
							<tr>
								<th><?php esc_html_e( 'Label', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Key (Preview)', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Permissions', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Status', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Requests', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Created', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Last Used', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Actions', 'custom-api-endpoint' ); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ( $keys as $key_str => $key_data ) : ?>
								<tr>
									<td><?php echo esc_html( $key_data['label'] ?? '' ); ?></td>
									<td><code><?php echo esc_html( substr( $key_str, 0, 12 ) . '...' ); ?></code></td>
									<td>
										<?php foreach ( $key_data['permissions'] ?? array() as $p ) : ?>
											<span class="cap-perm-tag"><?php echo esc_html( $p ); ?></span>
										<?php endforeach; ?>
									</td>
									<td>
										<span class="cap-badge <?php echo ! empty( $key_data['enabled'] ) ? 'cap-badge-active' : 'cap-badge-inactive'; ?>">
											<?php echo ! empty( $key_data['enabled'] ) ? esc_html__( 'Active', 'custom-api-endpoint' ) : esc_html__( 'Disabled', 'custom-api-endpoint' ); ?>
										</span>
									</td>
									<td><?php echo absint( $key_data['request_count'] ?? 0 ); ?></td>
									<td><?php echo esc_html( $key_data['created'] ?? '' ); ?></td>
									<td><?php echo esc_html( $key_data['last_used'] ?: '—' ); ?></td>
									<td>
										<button class="button button-small cap-btn-toggle" data-key="<?php echo esc_attr( $key_str ); ?>">
											<?php echo ! empty( $key_data['enabled'] ) ? esc_html__( 'Disable', 'custom-api-endpoint' ) : esc_html__( 'Enable', 'custom-api-endpoint' ); ?>
										</button>
										<button class="button button-small cap-btn-danger cap-btn-revoke" data-key="<?php echo esc_attr( $key_str ); ?>">
											<?php esc_html_e( 'Revoke', 'custom-api-endpoint' ); ?>
										</button>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php endif; ?>
			</div>

			<div class="cap-card">
				<h2><?php esc_html_e( 'Access Logs', 'custom-api-endpoint' ); ?></h2>
				<?php if ( empty( $logs ) ) : ?>
					<p><?php esc_html_e( 'No request logs yet.', 'custom-api-endpoint' ); ?></p>
				<?php else : ?>
					<button class="button cap-btn-danger" id="cap-clear-logs" style="margin-bottom:10px;">
						<?php esc_html_e( 'Clear Logs', 'custom-api-endpoint' ); ?>
					</button>
					<table class="cap-table cap-log-table">
						<thead>
							<tr>
								<th><?php esc_html_e( 'Time', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Key', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Action', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Status', 'custom-api-endpoint' ); ?></th>
								<th><?php esc_html_e( 'Duration', 'custom-api-endpoint' ); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ( $logs as $log ) : ?>
								<tr>
									<td><?php echo esc_html( $log['time'] ); ?></td>
									<td><?php echo esc_html( $log['key'] ); ?></td>
									<td><?php echo esc_html( $log['action'] . ' ' . $log['method'] ); ?></td>
									<td><?php echo absint( $log['status_code'] ); ?></td>
									<td><?php echo esc_html( $log['duration_ms'] . 'ms' ); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php endif; ?>
			</div>
		</div>

		<script>
		(function() {
			var addBtn = document.getElementById('cap-add-key-btn');
			var result = document.getElementById('cap-new-key-result');
			var keyVal = document.getElementById('cap-new-key-value');
			var nonce  = document.querySelector('#cap_nonce')?.value || '';

			if (addBtn) {
				addBtn.addEventListener('click', function() {
					var label = document.getElementById('cap-label').value.trim();
					var perms = [];
					document.querySelectorAll('.cap-perm-check:checked').forEach(function(cb) {
						perms.push(cb.value);
					});

					if (!label) { alert('Please enter a label.'); return; }

					var fd = new FormData();
					fd.append('action', 'cap_add_key');
					fd.append('nonce', nonce);
					fd.append('label', label);
					fd.append('permissions', JSON.stringify(perms));

					fetch(ajaxurl, { method: 'POST', body: fd })
						.then(function(r) { return r.json(); })
						.then(function(d) {
							if (d.success) {
								keyVal.textContent = d.data.key;
								result.style.display = 'block';
								setTimeout(function() { location.reload(); }, 4000);
							} else {
								alert(d.data?.message || 'Error generating key.');
							}
						});
				});
			}

			document.querySelectorAll('.cap-btn-revoke').forEach(function(btn) {
				btn.addEventListener('click', function() {
					if (!confirm('Revoke this API key? This cannot be undone.')) return;
					var key = this.dataset.key;
					var fd = new FormData();
					fd.append('action', 'cap_revoke_key');
					fd.append('nonce', nonce);
					fd.append('key', key);

					fetch(ajaxurl, { method: 'POST', body: fd })
						.then(function(r) { return r.json(); })
						.then(function() { location.reload(); });
				});
			});

			document.querySelectorAll('.cap-btn-toggle').forEach(function(btn) {
				btn.addEventListener('click', function() {
					var key = this.dataset.key;
					var fd = new FormData();
					fd.append('action', 'cap_toggle_key');
					fd.append('nonce', nonce);
					fd.append('key', key);

					fetch(ajaxurl, { method: 'POST', body: fd })
						.then(function(r) { return r.json(); })
						.then(function() { location.reload(); });
				});
			});

			var clearBtn = document.getElementById('cap-clear-logs');
			if (clearBtn) {
				clearBtn.addEventListener('click', function() {
					if (!confirm('Clear all access logs?')) return;
					var fd = new FormData();
					fd.append('action', 'cap_clear_logs');
					fd.append('nonce', nonce);

					fetch(ajaxurl, { method: 'POST', body: fd })
						.then(function(r) { return r.json(); })
						.then(function() { location.reload(); });
				});
			}
		})();
		</script>
		<?php
	}

	public function ajax_add_key(): void {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error( array( 'message' => 'Insufficient permissions.' ) );
		}

		check_ajax_referer( 'cap_add_key', 'nonce' );

		$label       = isset( $_POST['label'] ) ? sanitize_text_field( wp_unslash( $_POST['label'] ) ) : '';
		$permissions = array();

		if ( ! empty( $_POST['permissions'] ) ) {
			$raw_perms = json_decode( wp_unslash( $_POST['permissions'] ), true );
			if ( is_array( $raw_perms ) ) {
				$permissions = array_map( 'sanitize_text_field', $raw_perms );
			}
		}

		if ( empty( $label ) ) {
			wp_send_json_error( array( 'message' => 'Label is required.' ) );
		}

		$result = $this->auth->add_key( $label, $permissions );
		wp_send_json_success( $result );
	}

	public function ajax_revoke_key(): void {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error();
		}

		check_ajax_referer( 'cap_add_key', 'nonce' );

		$key = isset( $_POST['key'] ) ? sanitize_text_field( wp_unslash( $_POST['key'] ) ) : '';
		if ( empty( $key ) ) {
			wp_send_json_error();
		}

		$this->auth->revoke_key( $key );
		wp_send_json_success();
	}

	public function ajax_toggle_key(): void {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error();
		}

		check_ajax_referer( 'cap_add_key', 'nonce' );

		$key = isset( $_POST['key'] ) ? sanitize_text_field( wp_unslash( $_POST['key'] ) ) : '';
		if ( empty( $key ) ) {
			wp_send_json_error();
		}

		$this->auth->toggle_key( $key );
		wp_send_json_success();
	}

	public function ajax_clear_logs(): void {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error();
		}

		check_ajax_referer( 'cap_add_key', 'nonce' );

		$this->auth->clear_logs();
		wp_send_json_success();
	}
}
