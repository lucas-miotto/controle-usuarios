<template>
	<div class="form-filter">
		<h2>Formulário para filtro de usuários</h2>
		<form>
			<fieldset>
				<label for="name">Nome</label>
				<input id="name" name="name" type="text" v-model="search.name" />
			</fieldset>
			<fieldset>
				<label for="cpf">CPF</label>
				<input id="cpf" name="cpf" type="text" v-model="search.cpf" />
			</fieldset>
			<fieldset>
				<label for="date_start">Inicio</label>
				<input
					id="date_start"
					name="date_start"
					type="date"
					v-model="search.date_start"
				/>
			</fieldset>
			<fieldset>
				<label for="date_end">Fim</label>
				<input
					id="date_end"
					name="date_end"
					type="date"
					v-model="search.date_end"
				/>
			</fieldset>
			<div class="button">
				<button class="btn" @click.prevent="searchUser">
					Filtrar Usuários
				</button>
			</div>
		</form>
	</div>
</template>

<script>
export default {
	name: "UserSearch",

	data() {
		return {
			search: {
				name: "",
				cpf: "",
				date_start: "",
				date_end: "",
			},
		};
	},
	methods: {
		searchUser() {
			this.search.cpf = this.search.cpf.replace(/\D/g, "");

			this.$router.push({
				query: { ...this.search },
			});
		},
	},
};
</script>

<style scoped>
form {
	max-width: 600px;
	margin: 30px auto 60px auto;
	position: relative;
	display: flex;
	align-items: center;
	flex-wrap: wrap;
}
fieldset {
	width: 48%;
	margin-right: 4%;
}

fieldset:nth-child(2n) {
	margin-right: 0;
}

input {
	width: 100%;
}

h2 {
	margin-top: 40px;
	margin-bottom: 20px;
	max-width: 600px;
	margin: 30px auto 0;
	display: block;
}

.btn {
	background: #e80;
	display: block;
	clear: both;
}
</style>
