<template>
	<header>
		<nav>
			<div class="logo">
				<router-link to="/">Controle Usuários</router-link>
			</div>
			<router-link class="btn" to="/registrar-usuario">
				Novo Usuários
			</router-link>
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
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 15px 20px;
	box-shadow: 0 2px 4px rgba(30, 60, 90, 0.1);
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
