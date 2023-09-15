<template>
	<header>
		<nav>
			<div class="container">
				<div class="logo">
					<router-link to="/">Controle Usuários</router-link>
				</div>
				<router-link class="btn" to="/registrar-usuario">
					Novo Usuários
				</router-link>
			</div>
		</nav>
	</header>
</template>

<script>
export default {
	name: "TheHeader",
};
</script>

<style scoped>
nav {
	padding: 15px 20px;
	box-shadow: 0 2px 4px rgba(2, 89, 41, 0.1);
}
nav .container {
	display: flex;
	align-items: center;
	justify-content: space-between;
}

.logo {
	padding: 10px 0;
}

.logo a {
	font-size: 1.4rem;
	font-weight: bold;
	color: #345;
}
</style>
