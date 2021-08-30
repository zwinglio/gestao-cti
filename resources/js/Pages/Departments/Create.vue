<template>
  <Layout>
    <Head>
      <title>Departamentos</title>
    </Head>

    <section class="create-departments">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h1>Criação de Departamentos</h1>
            <hr />
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <!-- <div class="card-header">
                <h5>Formulário de Criação</h5>
              </div> -->
              <div class="card-body">
                <form method="POST" action="/departments/store">
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
                      >
                        <option value="Administrativo">Administrativo</option>
                        <option value="Gabinete">Gabinete</option>
                        <option value="Externo">Externo</option>
                      </select>
                      <!-- <input
                        type="text"
                        class="form-control"
                        id="department_tipo"
                        name="tipo"
                      /> -->
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
                        class="btn btn-success text-white mt-2 w-100"
                      >
                        Cadastrar Departamento
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

export default {
  props: {
    nome: String,
  },
  components: { Layout },
  data: () => ({
    csrf: document
      .querySelector('meta[name="csrf-token"]')
      .getAttribute("content"),
  }),
};
</script>

<style>
</style>