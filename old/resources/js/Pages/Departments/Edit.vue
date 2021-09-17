<template>
  <Layout>
    <Head>
      <title>Departamentos</title>
    </Head>

    <section class="create-departments">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h1>Atualizar Departamentos</h1>
            <hr />
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <form @submit.prevent="submit">
                  <div class="row mb-4">
                    <div class="col-lg-8">
                      <label for="department_nome" class="form-label"
                        >Nome do departamento:</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="department_nome"
                        name="nome"
                        required
                        v-model="form.nome"
                      />
                    </div>

                    <div class="col-lg-4">
                      <label for="department_tipo" class="form-label"
                        >Tipo do departamento:</label
                      >
                      <select
                        name="tipo"
                        id="department_tipo"
                        class="form-select"
                        required
                        v-model="form.tipo"
                      >
                        <option value="Administrativo">Administrativo</option>
                        <option value="Gabinete">Gabinete</option>
                        <option value="Externo">Externo</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-lg-7">
                      <label for="department_nome" class="form-label"
                        >Responsável:</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="department_responsavel"
                        name="responsavel"
                        v-model="form.responsavel"
                        required
                      />
                    </div>
                    <div class="col-lg-5">
                      <label for="department_nome" class="form-label"
                        >E-mail para contato:</label
                      >
                      <input
                        type="email"
                        class="form-control"
                        id="department_email"
                        name="email"
                        placeholder="email@provedor.com"
                        v-model="form.email"
                        required
                      />
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-lg-9">
                      <label for="department_nome" class="form-label"
                        >Telefone para contato:</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="department_telefone"
                        name="telefone"
                        placeholder="84 9 9999 8888"
                        v-model="form.telefone"
                        required
                      />
                    </div>

                    <div class="col-lg-3">
                      <label for="department_nome" class="form-label"
                        >Ramal:</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="department_ramal"
                        name="ramal"
                        placeholder="5599"
                        v-model="form.ramal"
                        required
                      />
                    </div>
                  </div>
                  <hr />
                  <input type="hidden" name="_token" :value="csrf" />
                  <div class="row justify-content-end">
                    <div class="col-lg-4 text-end">
                      <button
                        type="submit"
                        class="btn btn-info text-white mt-2 w-100"
                      >
                        Atualizar Departamento
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </Layout>
</template>

<script>
import Layout from "../../Layout";
import { Head } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Head,
  },

  layout: Layout,

  props: {
    department: Object,
  },

  remember: "form",

  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      form: {
        nome: this.department.nome,
        tipo: this.department.tipo,
        responsavel: this.department.responsavel,
        email: this.department.email,
        telefone: this.department.telefone,
        ramal: this.department.ramal,
      },
    };
  },

  methods: {
    submit() {
      var data = new FormData()
      data.append("nome", this.form.nome)
      data.append("tipo", this.form.tipo)
      data.append("responsavel", this.form.responsavel)
      data.append("email", this.form.email)
      data.append("telefone", this.form.telefone)
      data.append("ramal", this.form.ramal)
      data.append("_method", 'put')

      this.$inertia.post('/departments/' + this.department.id, data)
    }
  }
};
</script>

<style>
</style>