
<template>
 <Header/>
</template>
<script>
import Header from './Components/Layout/Header.vue';

export default {
  name: 'App',
  components: {
    Header,
  },
  computed: {},
  data() {
    return {
      message: 'Welcome to The Century Ebooks Library Website!!'
    };
  }
};
</script>
