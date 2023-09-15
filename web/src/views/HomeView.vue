<template>
	<section class="home container">
		<h1>Controle de Usuários</h1>
		<UserSearch />
		<div class="user-table">
			<UserTableHeader />
			<div class="table-content-container">
				<UserTableContent />
				<UserTableContent />
				<UserTableContent />
				<UserTableContent />
				<UserTableContent />
				<UserTableContent />
			</div>
		</div>
		<router-link class="btn" to="/">Adicionar novo usuario</router-link>
	</section>
</template>

<script>
import UserSearch from "@/components/UserSearch.vue";
import UserTableHeader from "@/components/UserTableHeader.vue";
import UserTableContent from "@/components/UserTableContent.vue";

export default {
	name: "HomeView",
	components: {
		UserSearch,
		UserTableHeader,
		UserTableContent,
	},
};
</script>
<style scoped>
.btn {
	max-width: 300px;
	margin: 40px auto;
}
</style>
