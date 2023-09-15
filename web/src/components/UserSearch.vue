<template>
	<div class="form-filter">
		<h2>Formulário para filtro de usuários</h2>
		<form>
			<fieldset>
				<label for="name">Nome</label>
				<input id="name" name="name" type="text" v-model="name" />
			</fieldset>
			<fieldset>
				<label for="cpf">CPF</label>
				<input id="cpf" name="cpf" type="text" v-model="cpf" />
			</fieldset>
			<fieldset>
				<label for="date_start">Inicio</label>
				<input
					id="date_start"
					name="date_start"
					type="date"
					v-model="date_start"
				/>
			</fieldset>
			<fieldset>
				<label for="date_end">Fim</label>
				<input id="date_end" name="date_end" type="date" v-model="date_end" />
			</fieldset>
			<div class="button">
				<button class="btn" @click.prevent="">Filtrar Usuários</button>
			</div>
		</form>
	</div>
</template>

<script>
export default {
	name: "UserSearch",

	data() {
		return {
			busca: "",
		};
	},
	methods: {
		// searchUser() {
		// 	this.$router.push({ query: { q: this.busca } });
		// },
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
