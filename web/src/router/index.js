import Vue from "vue";
import VueRouter from "vue-router";
import HomeView from "../views/HomeView.vue";
import CreateUserView from "../views/CreateUserView.vue";

Vue.use(VueRouter);

const routes = [
	{
		path: "/",
		name: "home",
		component: HomeView,
	},
	{
		path: "/registrar-usuario",
		name: "registrar-usuario",
		component: CreateUserView,
	},
];

const router = new VueRouter({
	mode: "history",
	base: process.env.BASE_URL,
	routes,
	scrollBehavior() {
		return window.scrollTo({ top: 0, behavior: "smooth" });
	},
});

export default router;
