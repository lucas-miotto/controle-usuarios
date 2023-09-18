import Vue from "vue";
import VueRouter from "vue-router";
import HomeView from "../views/HomeView.vue";
import UserCreateView from "../views/UserCreateView.vue";
import UserDetailView from "../views/UserDetailView.vue";
import UserEditView from "../views/UserEditView.vue";

Vue.use(VueRouter);

const routes = [
	{
		path: "/",
		name: "home",
		component: HomeView,
	},
	{
		path: "/detalhar-usuario/:id",
		name: "user-detail",
		component: UserDetailView,
		props: true,
	},
	{
		path: "/editar-usuario/:id",
		name: "user-edit",
		component: UserEditView,
		props: true,
	},
	{
		path: "/registrar-usuario",
		name: "user-register",
		component: UserCreateView,
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
