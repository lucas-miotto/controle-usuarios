<template>
	<section class="user-detail container">
		<h1>Detalhe do Usuário</h1>
		<div v-if="user" key="user" class="user-detail-wrapper">
			<ul>
				<li>
					<p>
						- ID: <strong>{{ user.id }}</strong>
					</p>
				</li>
				<li>
					<p>
						- Data cadastro: <strong>{{ user.created_at | formatDate }}</strong>
					</p>
				</li>
				<li>
					<p>
						- Nome: <strong>{{ user.name }}</strong>
					</p>
				</li>
				<li>
					<p>
						- CPF: <strong>{{ user.cpf | formatCPF }}</strong>
					</p>
				</li>
				<li>
					<p>
						- Email: <strong>{{ user.email }}</strong>
					</p>
				</li>
				<li>
					<p>
						- Perfil: <strong>{{ user.profile_id.role }}</strong>
					</p>
				</li>
			</ul>

			<div class="user-table address-table">
				<ul class="table-header table-item">
					<li>Logradouro</li>
					<li>CEP</li>
				</ul>
				<div class="table-content-container">
					<ul class="table-content table-item">
						<li>Rua ABC</li>
						<li>12345678</li>
					</ul>
				</div>
			</div>
		</div>
		<PageLoading key="carregando" v-else />
		<router-link class="btn btn-back" to="/"> Voltar </router-link>
	</section>
</template>

<script>
import { api } from "@/services.js";

export default {
	name: "UserDetailView",
	props: ["id"],
	data() {
		return {
			user: null,
		};
	},
	methods: {
		getUser() {
			api
				.get(`/users/${this.id}`)
				.then((response) => {
					this.user = response.data.user;
				})
				.catch((error) => {
					console.log(error);
				});
		},
	},
	created() {
		this.getUser();
	},
};
</script>

<style scoped>
.user-detail {
	max-width: 600px;
	margin: 0 auto;
	padding: 0 20px;
}

.btn-back {
	margin-top: 60px;
	max-width: 160px;
	background: #345;
}
.btn:hover {
	opacity: 0.8;
	transform: scale(1.1);
}
li {
	width: 100%;
	display: block;
	margin-bottom: 10px;
}
p {
	font-size: 1.2rem;
}
p strong {
	font-weight: bold;
}

.address-table {
	margin-top: 30px;
}
.address-table li {
	width: 50% !important;
	margin-bottom: 0;
}
</style>
