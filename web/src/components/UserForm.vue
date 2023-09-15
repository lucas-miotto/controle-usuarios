<template>
	<section class="user-form">
		<form>
			<label for="name">Nome *</label>
			<input
				required
				id="name"
				name="name"
				type="text"
				v-model="usuario.name"
			/>
			<label for="cpf">CPF *</label>
			<input required id="cpf" name="cpf" type="text" v-model="usuario.cpf" />
			<label for="email">Email *</label>
			<input
				required
				id="email"
				name="email"
				type="email"
				v-model="usuario.email"
			/>
			<label for="profile">Perfil *</label>
			<select required name="profile" id="profile">
				<option value="1">ADM</option>
				<option value="2">USER</option>
			</select>
			<h2>Endereço</h2>
			<label for="logradouro">Logradouro</label>
			<input
				id="logradouro"
				name="logradouro"
				type="text"
				v-model="usuario.logradouro"
			/>
			<label for="cep">CEP</label>
			<input id="cep" name="cep" type="text" v-model="usuario.cep" />

			<div class="button">
				<button class="btn" @click.prevent="getUsuario">
					Adicionar/Atualizar
				</button>
			</div>
		</form>

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
					<li>
						<button class="btn btn-small btn-delete">Excluir</button>
					</li>
				</ul>
			</div>
		</div>
	</section>
</template>

<script>
import axios from "axios";
// import { api } from "@/services.js";

export default {
	name: "UserForm",
	data() {
		return {
			usuario: {
				id: "",
				name: "",
				email: "",
				cpf: "",
			},
		};
	},

	//
	methods: {
		getUsuario() {
			const config = {
				headers: {},
			};
			axios
				.get("http://127.0.0.1:8000/api/users/1", config)
				.then((response) => {
					const responseUsuario = response.data.user;
					this.usuario = responseUsuario;
					console.log(this.usuario);
				})
				.catch(console.log);
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
</style>
