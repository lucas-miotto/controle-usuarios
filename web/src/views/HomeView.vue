<template>
	<section class="home container">
		<h1>Controle de Usuários</h1>
		<UserSearch />
		<div class="user-table">
			<UserListHeader />
			<div class="table-content-container">
				<UserListContent />
			</div>
		</div>
		<router-link class="btn" to="/registrar-usuario">
			Adicionar novo usuario
		</router-link>
	</section>
</template>

<script>
import UserSearch from "@/components/UserSearch.vue";
import UserListHeader from "@/components/UserListHeader.vue";
import UserListContent from "@/components/UserListContent.vue";

export default {
	name: "HomeView",
	components: {
		UserSearch,
		UserListHeader,
		UserListContent,
	},
};
</script>

<style scoped>
.btn {
	max-width: 300px;
	margin: 40px auto;
}
</style>
