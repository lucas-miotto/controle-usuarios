<template>
	<section class="user-list">
		<transition mode="out-in">
			<div v-if="users && users.length" class="users" key="users">
				<ul
					v-for="user in users"
					:key="user.id"
					class="table-content table-item"
				>
					<li>{{ user.id }}</li>
					<li>{{ user.created_at | formatDate }}</li>
					<li>{{ user.name }}</li>
					<li>{{ user.cpf | formatCPF }}</li>
					<li>{{ user.email }}</li>
					<li>{{ user.profile_id.role }}</li>
					<li>
						<router-link
							:to="{ name: 'user-detail', params: { id: user.id } }"
							class="btn btn-small btn-edit"
						>
							Detalhar
						</router-link>
						<router-link
							:to="{ name: 'user-edit', params: { id: user.id } }"
							class="btn btn-small btn-view"
						>
							Editar
						</router-link>
						<button
							class="btn btn-small btn-delete"
							@click="deleteUser(user.id)"
						>
							Excluir
						</button>
					</li>
				</ul>
			</div>
			<div v-else-if="users && users.length === 0" key="no-results">
				<p class="no-results">
					Busca sem resultados. Nenhum usuário encontrado.
				</p>
			</div>
			<PageLoading key="carregando" v-else />
		</transition>
	</section>
</template>

<script>
import { api } from "@/services.js";
import PageLoading from "./PageLoading.vue";
import { serialize } from "@/helpers.js";

export default {
	name: "UserTableContent",
	components: { PageLoading },
	data() {
		return {
			users: null,
		};
	},
	computed: {
		url() {
			const query = serialize(this.$route.query);
			return `/users?${query}`;
		},
	},
	methods: {
		getUsers() {
			this.users = null;
			api
				.get(this.url)
				.then((response) => {
					this.users = response.data.users;
				})
				.catch((error) => {
					console.log(error);
				});
		},

		deleteUser(id) {
			const confirm = window.confirm("Deseja remover este usúario?");

			if (confirm) {
				api.delete(`/users/${id}`).then(() => {
					this.getUsers();
				});
			}
		},
	},
	watch: {
		url() {
			this.getUsers();
		},
	},
	created() {
		this.getUsers();
	},
};
</script>

<style>
.no-results {
	margin-top: 40px;
	widows: 100%;
	text-align: center;
	font-size: 1.4rem;
}
</style>
