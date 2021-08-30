<template>
  <section id="navbar">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Gestão - CTI</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <Link class="nav-link" aria-current="page" href="/">Home</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" aria-current="page" href="/tickets"
                  >Chamados</Link
                >
              </li>
              <li class="nav-item">
                <Link class="nav-link" aria-current="page" href="/departments"
                  >Departamentos</Link
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: { Link },
};
</script>

<style>
#navbar {
  background-color: #212529;
  padding: 5px;
}
</style>