<template>
  <Layout>
    <Head>
      <title>Criar Chamado</title>
    </Head>

    <section class="criar-tickets">
      <div class="container">
        <h1>Criar Ticket</h1>
      </div>
    </section>

  </Layout>
</template>

<script>
import Layout from "../../Layout";
import { Link } from "@inertiajs/inertia-vue3";


export default {
  props: {
    nome: String,
  },
  components: { Layout, Link },
};
</script>

<style>
</style>