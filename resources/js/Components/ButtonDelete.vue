<template>
  <!-- Botão visível -->
  <a
    :href="`/departments/${id}/destroy`"
    class="btn btn-danger btn-sm ms-2"
    data-bs-toggle="modal"
    data-bs-target="#modalDelete"
    >Excluir</a
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
          <a
            class="btn btn-danger"
            :href="`/${routePrefix}/${data.id}/destroy`"
          >
            Deletar
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data", "routePrefix"],
};
</script>

<style>
</style>