<style>

nav{
background-color:lightgrey;

}

li{
	list-style:none;
	font-size: 1.9rem;
	color:grey;
}

a{
	color:grey;

}

ul{
	display:flex;
	gap:1rem
}


.current{
font-weight: bold;
color:darkgreen
}

.link{
	list-style: none;
	color:black
}

</style>

<header>
	<h1>
	</h1>
	<nav>
		<ul>
			<li>
				<a
				class="<?=urlCheck("/") ? "current" : "link";?>"
				href="/">Home</a>
			</li>
			<li>
				<a
				class="<?=urlCheck("/about") ? "current" : "link"?>"
				href="/about">About</a>
			</li>
			<li>
				<a
				class="<?=urlCheck("/contact") ? "current" : "link"?>"
				href="/contact">Contact</a>
			</li>
					<li>
				<a
				class="<?=urlCheck("/notes") ? "current" : "link"?>"
				href="/notes">notes</a>
			</li>
		</ul>
	</nav>
</header>
