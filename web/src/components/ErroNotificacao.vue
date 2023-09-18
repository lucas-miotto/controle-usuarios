<template>
	<transition>
		<ul class="erro" v-if="erros.length > 0">
			<li v-for="(erro, index) in erros" :key="index">
				<p v-for="(erroItem, erroIndex) in erro" :key="erroIndex">
					{{ erroItem[0] }}
				</p>
			</li>
		</ul>
	</transition>
</template>

<script>
export default {
	name: "ErroNotificacao",
	props: {
		erros: Array,
	},
};
</script>

<style scoped>
.erro {
	margin: 20px auto;
}

.erro li {
	color: #e85435;
	text-align: center;
}
</style>
