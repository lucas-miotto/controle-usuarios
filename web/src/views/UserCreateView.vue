<template>
	<section class="user-create">
		<router-link class="btn btn-back" to="/"> Voltar </router-link>
		<h1>Cadastro do Usuário</h1>
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
				v-model="user.profile_id"
			>
				<option value="1">ADM</option>
				<option value="2">USER</option>
			</select>

			<h2>Endereço</h2>
			<label for="logradouro">Logradouro</label>
			<input id="logradouro" name="logradouro" type="text" />
			<label for="cep">CEP</label>
			<input id="cep" name="cep" type="text" />

			<div class="button">
				<input
					class="btn"
					type="button"
					value="Criar Usúario"
					@click.prevent="createUser"
				/>
			</div>
		</form>
		<ErroNotificacao :erros="erros" />
	</section>
</template>

<script>
import { api } from "@/services.js";

export default {
	name: "UserCreateView",
	data() {
		return {
			user: {
				name: "",
				cpf: "",
				email: "",
				profile_id: "",
			},
			erros: [],
		};
	},
	methods: {
		async createUser(event) {
			this.erros = [];

			const button = event.currentTarget;
			button.value = "Adicionando...";
			button.setAttribute("disabled", "");

			await api.post("/users", this.user).then((response) => {
				if (response.data.success !== false) {
					this.$router.push({ name: "home" });
				} else {
					this.erros.push(response.data.data);
				}
			});

			button.removeAttribute("disabled");
			button.value = "Criar Usúario";
		},
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
.user-create {
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
