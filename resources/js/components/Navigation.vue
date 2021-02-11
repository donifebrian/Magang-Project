<template>
	<nav class="sidebar">
		<div class="sidebar-header">
			<a href="#" class="sidebar-brand"> BMI <span>Web</span> </a>
			<div class="sidebar-toggler not-active">
				<!-- {{ --not - active-- }} -->
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

		<div class="sidebar-body">
			<ul class="nav metismenu" id="menu1">
				<!-- <li class="nav-item nav-category">web apps</li>
				<li class="nav-item" style="color: blueviolet">
					<a
						class="nav-link"
						
						href="#emails"
						role="button"
						aria-expanded="false"
						aria-controls="emails"
					>
						<i class="link-icon" data-feather="mail"></i>
						<span class="link-title">Email</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>

					<ul class="">
						<li class="nav-item">
							<a href="#" class="nav-link">Inbox</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Read</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Compose</a>
						</li>
					</ul>
				</li>


				<li class="nav-item nav-category">NobleUI</li>
        		<li class="nav-item">
					<a class="nav-link" data-toggle="collapse" href="#emails" role="button"
					aria-expanded="false" aria-controls="emails">
						<i class="link-icon" data-feather="mail"></i>
						<span class="link-title">Email</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="emails">


						<ul class="nav sub-menu">
							<li class="nav-item">
								<a  class="nav-link">Inbox</a>
							</li>
							<li class="nav-item">
								<a class="nav-link">Read</a>
							</li>
							<li class="nav-item">
								<a class="nav-link">Compose</a>
							</li>
						</ul>
					</div>
       		 	</li>

				<li class="nav-item nav-category" >Modif2</li>
        		<li class="nav-item" >
					<a class="nav-link has-arrow" aria-expanded="false">
						<i class="link-icon" data-feather="mail"></i>
						<span class="link-title">Email</span>
					</a>
					
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a  class="nav-link">Inbox</a>
						</li>
						<li class="nav-item">
							<a class="nav-link">Read</a>
						</li>
						<li class="nav-item">
							<a class="nav-link">Compose</a>
						</li>
					</ul>
					
       		 	</li> -->

				<!-- <li class="nav-item nav-category">Mentis Menu</li>
				<li class="nav-item">

					<a class="nav-link has-arrow" aria-controls="emails"
						role="button" href="#emails" aria-expanded="false">

						<i class="link-icon" data-feather="mail"></i>
						<span class="link-title">Email</span>

					</a>

					<ul class="costume-sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link">menu </a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Read</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Compose</a>
						</li>
					</ul>
				</li> -->

				<li class="nav-item nav-category">Contoh Menu</li>
				<li class="nav-item" style="">
					<a class="nav-link has-arrow" aria-expanded="false">
						<i class="link-icon" data-feather="mail"></i>
						<span class="link-title">Email</span>
					</a>
					<ul class="costum-submenu">
						<li class="nav-item costum-nav-item">
							<a href="#" class="nav-link costum-nav-link">menu </a>
						</li>
						<li class="nav-item costum-nav-item costum-nav-item-active">
							<a href="#" class="nav-link costum-nav-link">Read</a>
						</li>
						<li class="nav-item costum-nav-item">
							<a href="#" class="nav-link costum-nav-link">Compose</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</template>

<script>
export default {
	mounted() {
		console.log("Component mounted.");
	},
};
</script>

<style>
</style>