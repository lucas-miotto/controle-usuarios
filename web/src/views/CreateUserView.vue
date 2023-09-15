<template>
	<section class="meu-cadastro">
		<router-link class="btn btn-back" to="/"> Voltar </router-link>
		<h1>Cadastro do Usuário</h1>
		<UserForm>
			<button class="btn" @click.prevent="">Atualizar Usuário</button>
		</UserForm>
	</section>
</template>

<script>
import UserForm from "@/components/UserForm.vue";
// import { api } from "@/services.js";

export default {
	name: "CreateUserView",
	components: {
		UserForm,
	},
	methods: {},
};
</script>
<style scoped>
.meu-cadastro {
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
	/* background: #22c069; */
	opacity: 0.8;
	transform: scale(1.1);
}
</style>
