import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import moment from "moment";
import PageLoading from "@/components/PageLoading.vue";

moment.locale("pt-br");

Vue.config.productionTip = false;

Vue.component("PageLoading", PageLoading);

Vue.filter("formatCPF", (cpf) => {
	if (cpf) {
		cpf = cpf.replace(/\D/g, "");
		cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");

		return cpf;
	}
});

Vue.filter("formatDate", function (date) {
	if (date) {
		return moment(String(date)).format("DD/MM/YYYY");
	}
});

new Vue({
	router,
	store,
	render: (h) => h(App),
}).$mount("#app");
