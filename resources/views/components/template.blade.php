@props([
	'metaTitle' => ''
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- meta -->
		<title>{{ ($metaTitle ? $metaTitle.' - ' : '' ) }}Grand Valley State University</title>
		<!-- css -->
		<link rel="stylesheet" href="{{ asset('css/critical.css') }}" />
		<!-- js -->
		<script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
		<!-- header_custom -->
		<!--[if gt IE 9|!IE]><!--><noscript id="noncritical-css"><!--<![endif]-->
			<link rel="stylesheet" type="text/css" href="{{ asset('css/noncritical.css') }}"/>
		<!--[if gt IE 9|!IE]><!--></noscript>
		<script>
			var loadCss = function(id, raf, lns) {
				lns = function() {
					var ns = document.getElementById(id),
						div = document.createElement('div');
					div.setAttribute('aria-hidden', 'true');
					div.innerHTML = ns.textContent;
					document.body.appendChild(div);
					ns.parentElement.removeChild(ns);
				};
				raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
				raf && raf(function() { window.setTimeout(lns, 0) }) || window.addEventListener('load', lns);
			};
			loadCss('noncritical-css');

		</script>
	</head>
	<body class="internal">
		<x-hotels::header />

		<!-- Main Content -->
		{{-- <x-hotels::breadcrumbs /> --}}
		{{-- Breadcrumbs::render() --}}
		{{ Breadcrumbs::render('administrator') }}
		<main id="main">
			<!-- Breadcrumbs -->
			<div class="content">
				{{ $slot }}
			</div>
		</main>
		<x-layout.homepage.footer />
	</body>
</html>
