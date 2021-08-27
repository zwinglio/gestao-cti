<template>
  <Layout>
    <Head>
      <title>Chamados</title>
    </Head>

    <section class="tickets">
      <div class="container">
        <h1>Tickets</h1>
        <Link class="btn btn-primary btn-sm me-1" href="/tickets/create">Abrir chamado</Link>
        <Link class="btn btn-primary btn-sm me-1" href="/tickets/create">Consultar chamado</Link>
      </div>
    </section>

  </Layout>
</template>

<script>
import Layout from "../Layout";
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