<template>
	<!-- Depois fazer um form unico e deixar no componentes, e depois carregar tanto pra criar quanto pra atualia. -->
	<!-- Estou aqui, no mais está funcionando mas preciso aprimorar e verificar a questão do seelct. vou pra o criar agora. -->
	<section class="user-edit user-form container">
		<router-link class="btn btn-back" to="/"> Voltar </router-link>
		<h1>Editar Usuário</h1>
		<div v-if="user" key="user" class="user-detail-wrapper">
			<form>
				<label for="name">Nome *</label>
				<input required id="name" name="name" type="text" v-model="user.name" />
				<label for="cpf">CPF *</label>
				<input required id="cpf" name="cpf" type="text" v-model="user.cpf" />
				<label for="email">Email *</label>
				<input
					required
					id="email"
					name="email"
					type="email"
					v-model="user.email"
				/>
				<label for="profile_id">Perfil *</label>
				<select
					required
					name="profile_id"
					id="profile_id"
					v-model="user.profile_id.id"
				>
					<option value="1">ADM</option>
					<option value="2">USER</option>
				</select>
				<h2>Endereço</h2>
				<label for="logradouro">Logradouro</label>
				<input id="logradouro" name="logradouro" type="text" />
				<label for="cep">CEP</label>
				<input id="cep" name="cep" type="text" v-model="user.cep" />
				<div class="button">
					<input
						class="btn"
						type="button"
						value="Atualizar Usúario"
						@click.prevent="updateUser"
					/>
				</div>
			</form>
			<ErroNotificacao :erros="erros" />

			<div class="user-table address-table">
				<ul class="table-header table-item">
					<li>Logradouro</li>
					<li>CEP</li>
					<li>Ação</li>
				</ul>
				<div class="table-content-container">
					<ul class="table-content table-item">
						<li>Rua ABC</li>
						<li>12345678</li>
						<button class="btn btn-small btn-delete">Excluir</button>
					</ul>
				</div>
			</div>
		</div>
		<PageLoading key="carregando" v-else />
	</section>
</template>

<script>
import { api } from "@/services.js";

export default {
	name: "UserEditView",
	props: ["id"],
	data() {
		return {
			user: null,
			erros: [],
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

		async updateUser(event) {
			this.erros = [];

			const button = event.currentTarget;
			button.value = "Atualizando...";
			button.setAttribute("disabled", "");

			const saveProfile_id = this.user.profile_id;
			this.user.profile_id = this.user.profile_id.id;

			await api.put(`/users/${this.user.id}`, this.user).then((response) => {
				if (response.data.success !== false) {
					this.$router.push({ name: "home" });
				} else {
					this.erros.push(response.data.data);
					this.user.profile_id = saveProfile_id;
				}
			});

			button.removeAttribute("disabled");
			button.value = "Atualizar Usúario";
		},
	},
	created() {
		this.getUser();
	},
};
</script>

<style scoped>
form {
	display: grid;
}
h2 {
	margin-top: 0;
	margin-bottom: 15px;
}
.address-table {
	margin-top: 30px;
}
.address-table li {
	width: 33.33% !important;
}
.user-edit {
	max-width: 600px;
	margin: 0 auto;
	padding: 0 20px;
}

.btn-back {
	margin-top: 60px;
	max-width: 160px;
	background: #345;
}
.btn-back:hover {
	opacity: 0.8;
	transform: scale(1.1);
}
.btn {
	width: 260px;
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
