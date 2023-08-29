<template>
  <div class="container mt-5">
    <div class="row align-items-start text-center text-white justify-content-between">
      <div class="col p-5 mb-4 bg-primary rounded-3">One of three columns</div>
      <div class="col p-5 mb-4 bg-secondary rounded-3">One of three columns</div>
      <div class="col p-5 mb-4 bg-warning rounded-3">One of three columns</div>
    </div>

    <!--
      <div>
        <div v-if="secrets.length" class="row">
          <div class="secret" v-for="(secret, index) in secrets" :key="index">
            <strong v-text="secret.secret"></strong> - created at
            <span v-text="secret.created_at"></span>
          </div>
        </div>
      </div> -->
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
    };
  },
  methods: {
    // getSecrets() {
    //   axios
    //     .get("/api/secrets")
    //     .then((response) => (this.secrets = response.data));
    // },
  },
};
</script>
