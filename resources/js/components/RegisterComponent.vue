<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="#" @submit.prevent="handleSignIn">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Name"
                            required
                            v-model="formData.name"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Email"
                            required
                            v-model="formData.email"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"
                            >Password</label
                        >
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Password"
                            required
                            v-model="formData.password"
                        />
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            Sign in
                        </button>
                    </div>
                    <hr>
                    <div class="col-12">
                        <button type="submit" class="btn btn-secondary" @click="loginWithGithub">
                            Sign in With Github
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            secrets: [],
            formData: {
                name: "",
                email: "",
                password: "",
            },
        };
    },
    methods: {
        handleSignIn() {
            axios
              .post("/login", this.formData)
              .then((response) => {
                console.log("User signed in!");
                this.$router.push({name: 'uDashboard'});
              })
              .catch((error) => console.log(error));
        },
        loginWithGithub() {
          alert("I am here")
        },
    },
};
</script>
