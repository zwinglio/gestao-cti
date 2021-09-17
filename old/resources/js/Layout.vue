<template>
  <div>
    <Navbar />
      <slot />
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "./Components/Navbar";

export default {
  components: { Link, Navbar },
};
</script>

<style>
section {
  padding: 35px;
}

.fade-enter-active,
.fade-leave-active {
  transition: all 0.5s ease-out;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>