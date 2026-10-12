<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
		header('Content-Type: text/html; charset=utf-8');
		header('Cache-Control: no-store');
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="theme-color" content="#0d0b0a">
			<title>LavaLust API — Running</title>
			<style>
				:root { color-scheme: dark; font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif; background: #0d0b0a; color: #f7f5f3; }
				* { box-sizing: border-box; }
				body { min-height: 100vh; margin: 0; display: grid; place-items: center; padding: 24px; background: radial-gradient(ellipse at 50% 38%, #29130b 0, #100d0b 43%, #0b0a09 78%); }
				main { width: min(100%, 720px); text-align: center; }
				.brand { display: inline-flex; align-items: center; gap: 12px; margin-bottom: 58px; font-size: 22px; font-weight: 800; letter-spacing: -.8px; }
				.mark { display: grid; place-items: center; width: 38px; height: 38px; border-radius: 11px; background: #ec4b13; color: white; font-size: 22px; }
				.badge { display: inline-flex; align-items: center; gap: 9px; padding: 9px 15px; border: 1px solid #693017; border-radius: 30px; color: #ff7a3c; background: #21120c; font-size: 12px; font-weight: 750; letter-spacing: 1.4px; text-transform: uppercase; }
				.dot { width: 8px; height: 8px; border-radius: 50%; background: #ff5a1f; box-shadow: 0 0 12px #ff5a1f; }
				h1 { margin: 27px 0 13px; font-size: clamp(42px, 8vw, 76px); line-height: 1; letter-spacing: -4px; }
				h1 span { color: #ed4b13; }
				p { margin: 0; color: #aaa5a2; font-size: clamp(16px, 2.4vw, 20px); line-height: 1.65; }
				.card { margin: 42px auto 0; padding: 20px 24px; width: min(100%, 480px); border: 1px solid #292522; border-radius: 14px; background: #12100f; text-align: left; }
				.card strong { display: block; margin-bottom: 8px; font-size: 14px; }
				code { color: #ff8450; font-size: 13px; overflow-wrap: anywhere; }
				footer { margin-top: 56px; color: #716c69; font-size: 13px; }
			</style>
		</head>
		<body>
			<main>
				<div class="brand"><span class="mark" aria-hidden="true">♥</span> LavaLust</div>
				<div class="badge"><span class="dot" aria-hidden="true"></span> API is running</div>
				<h1><span>LavaLust</span><br>API</h1>
				<p>Your backend service is online and ready to receive requests.</p>
				<section class="card" aria-label="API base URL">
					<strong>API base URL</strong>
					<code><?= htmlspecialchars(rtrim((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . ($_SERVER['HTTP_HOST'] ?? ''), '/') . '/api', ENT_QUOTES, 'UTF-8') ?></code>
				</section>
				<footer>LavaLust product management API</footer>
			</main>
		</body>
		</html>
		<?php
	}
}
?>
