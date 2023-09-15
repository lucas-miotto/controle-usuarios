<template>
	<div id="app">
		<TheHeader />
		<main id="main">
			<transition mode="out-in">
				<router-view />
			</transition>
		</main>
		<TheFooter />
	</div>
</template>

<script>
import TheHeader from "@/components/TheHeader.vue";
import TheFooter from "@/components/TheFooter.vue";

export default {
	components: {
		TheHeader,
		TheFooter,
	},
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@700&family=Roboto:wght@400;700&display=swap");

/* font-family: 'Bai Jamjuree', sans-serif;
font-family: 'Roboto', sans-serif; */
* {
	box-sizing: border-box;
}

body,
ul,
li,
h1,
h2,
p,
fieldset {
	padding: 0px;
	margin: 0px;
}
fieldset {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

ul {
	list-style: none;
}

body {
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	font-family: "Roboto", Arial, sans-serif;
	font-weight: 400;
	color: #345;
	background: url("./assets/pattern.svg") repeat top;
}

a {
	color: #345;
	text-decoration: none;
}

img {
	max-width: 100%;
	display: block;
}

.container {
	width: 100%;
	max-width: 1400px;
	padding: 0 90px;
	box-sizing: border-box;
	margin: 0 auto;
}

@media (max-width: 1366px) {
	.container {
		padding-left: 60px;
		padding-right: 60px;
	}
}

@media (max-width: 1000px) {
	.container {
		padding-left: 40px;
		padding-right: 40px;
	}
}

@media (max-width: 600px) {
	.container {
		padding-left: 30px;
		padding-right: 30px;
	}
}

@media (max-width: 450px) {
	.container {
		padding-left: 20px;
		padding-right: 20px;
	}
}

@media (max-width: 350px) {
	.container {
		padding-left: 15px;
		padding-right: 15px;
	}
}

.btn {
	display: block;
	padding: 10px 30px;
	background: #039645;
	border-radius: 4px;
	color: #fff;
	text-align: center;
	font-size: 1rem;
	box-shadow: 0 2px 4px rgba(2, 89, 41, 0.1);
	transition: all 0.3s;
	border: none;
	font-family: "Bai Jamjuree", sans-serif;
	cursor: pointer;
	font-weight: 700;
}

.btn:hover {
	background: #22c069;
	transform: scale(1.1);
}

#app {
	display: flex;
	min-height: 100vh;
	flex-direction: column;
}

#main {
	flex: 1;
}

h1 {
	text-align: center;
	margin-top: 40px;
	margin-bottom: 20px;
	color: #039645;
	font-weight: 700;
	font-size: 2rem;
}

h2 {
	font-size: 1.4rem;
	margin-top: 40px;
	margin-bottom: 20px;
	font-weight: 700;
}

label {
	margin-bottom: 5px;
	width: 100%;
	display: block;
}

input,
textarea,
select {
	font-family: "Roboto", Arial, sans-serif;
	border-radius: 4px;
	border: 1px solid #b1f1ce;
	padding: 15px;
	box-shadow: 0 4px 8px rgba(2, 89, 41, 0.1);
	transition: all 0.3s;
	font-size: 1rem;
	margin-bottom: 20px;
}

select {
	background: #fff;
}

input:hover,
input:focus,
textarea:hover,
textarea:focus,
select:focus {
	outline: none;
	box-shadow: 0 6px 12px rgba(2, 89, 41, 0.2);
	border-color: #039645;
}

.v-enter,
.v-leave-to {
	opacity: 0;
}

.v-enter {
	transform: translate3d(0, -20px, 0);
}

.v-leave-to {
	transform: translate3d(0, 20px, 0);
}

.v-enter-active,
.v-leave-active {
	transition: all 0.3s;
}

.table-item {
	display: flex;
	width: 100%;
	justify-content: space-between;
	border-radius: 4px;
	padding: 15px;
	border-bottom: 1px solid #fff;
}

.table-header {
	background-color: #1f1f23;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

.table-header li {
	width: 12.5%;
	font-size: 16px;
	color: #fff;
	font-weight: bold;
}
.table-content {
	align-items: center;
	background-color: #eaeaea;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

.table-content-container .table-content:nth-child(2n) {
	background-color: #f9f9f9;
}
.table-content-container .table-content:last-child {
	border-bottom-left-radius: 4px;
	border-bottom-right-radius: 4px;
}

.table-content li {
	width: 12.5%;
	font-size: 14px;
}

.table-content li:nth-child(6),
.table-header li:nth-child(6),
.table-content li:first-child,
.table-header li:first-child {
	width: 4%;
}

.table-header li:last-child,
.table-content li:last-child {
	width: 25%;
}
.table-content li:last-child {
	display: flex;
}

.btn-small {
	padding: 5px 10px;
	font-size: 14px;
	margin-left: 5px;
	margin-right: 5px;
}

.btn-edit {
	background-color: #764fd0;
}
.btn-edit:hover {
	background-color: #5c3ea3;
}

.btn-view {
	background-color: #e8ae3a;
}
.btn-view:hover {
	background-color: #b5882d;
}

.btn-delete {
	background-color: #e85435;
}
.btn-delete:hover {
	background-color: #b54129;
}
</style>
