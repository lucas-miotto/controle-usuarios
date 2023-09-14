<template>
	<section>
		<h1>Controle de Usuários</h1>
		<UserFilter />
	</section>
</template>

<script>
import UserFilter from "@/components/UserFilter.vue";
export default {
	name: "HomeView",
	components: {
		UserFilter,
	},
};
</script>
<style scoped>
h1 {
	color: #87f;
	margin-top: 40px;
	font-size: 2rem;
	text-align: center;
}
</style>
