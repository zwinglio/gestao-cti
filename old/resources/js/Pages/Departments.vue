<template>
  <Layout>
    <Head>
      <title>Departamentos</title>
    </Head>

    <section class="tickets">
      <div class="container">
        {{ success }}
        <h1>Departamentos</h1>
        <Link
          class="btn btn-primary btn-sm me-1 mt-3"
          href="/departments/create"
          >Criar departamento</Link
        >
        <hr />
        <table
          class="table table-striped caption-top"
          id="departmentsTable"
          v-once
        >
          <caption>
            Lista de departamentos
          </caption>
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Responsável</th>
              <th scope="col">Tipo</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="department in departments" :key="department">
              <td>{{ department.id }}</td>
              <td>{{ department.nome }}</td>
              <td>{{ department.responsavel }}</td>
              <td>{{ department.tipo }}</td>
              <td>
                <Link
                  :href="'/departments/' + department.id + '/edit'"
                  class="btn btn-sm btn-info"
                  >Editar</Link
                >
                <ButtonDelete :data="department" :routePrefix="'departments'">
                  Departamento: {{ department.nome }}
                </ButtonDelete>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </Layout>
</template>

<script>
import Layout from "../Layout";
import ButtonDelete from "../Components/ButtonDelete";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    departments: Object,
  },

  components: { Layout, Link, ButtonDelete },
  data: () => ({
    csrf: document
      .querySelector('meta[name="csrf-token"]')
      .getAttribute("content"),
    success: null,
  }),

  method: {},
};
</script>

<style>
</style>