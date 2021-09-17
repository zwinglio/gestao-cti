<template>
  <Layout>
    <Head>
      <title>Inicio</title>
    </Head>

    <section id="home">
      <div class="container">
          <div class="row">
              <div class="col">
                  <h1>
                      Bem-vindo!
                  </h1>
                  <p>
                      Aqui você tem acesso aos principais avisos do CTI
                  </p>
              </div>
          </div>
      </div>
    </section>

  </Layout>
</template>

<script>
import Layout from "../Layout";
import { Head } from "@inertiajs/inertia-vue3";

export default {
  props: {
    nome: String,
  },
  components: { Layout },
};
</script>

<style>
</style>