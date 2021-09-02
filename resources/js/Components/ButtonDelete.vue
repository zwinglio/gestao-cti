<template>
  <!-- Botão visível -->
  <Link
    :href="`departments/${data.id}`"
    class="btn btn-danger btn-sm ms-2"
    data-bs-toggle="modal"
    data-bs-target="#modalDelete"
    >Excluir</Link
  >

  <!-- Modal -->
  <div
    class="modal fade"
    id="modalDelete"
    tabindex="-1"
    aria-labelledby="modal"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ação irreversível!</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <p>Você está prestes a deletar os seguintes dados:</p>
          <p>
            <slot />
          </p>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Cancelar
          </button>
          <Link
            class="btn btn-danger"
            :href="`/${routePrefix}/${data.id}`"
            method="del-ete"
            replace
          >
            Deletar
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Link,
  },
  props: ["data", "routePrefix"],
  methods: {
    deleteData: {},
  },
};
</script>

<style>
</style>