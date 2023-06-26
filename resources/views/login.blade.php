import MyInput from 'flowbite/components/MyInput.vue';
import axios from 'axios';

@extends('main')

@section('app')
    <my-input>
<template>
  <div class="flex justify-center items-center h-screen">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <my-input label="Correo electrónico" type="email" placeholder="Introduce tu correo electrónico" v-model="email" />
      </div>
      <div class="mb-6">
        <my-input label="Contraseña" type="password" placeholder="Introduce tu contraseña" v-model="password" />
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" @click.prevent="submitForm()">Iniciar</button>
      </div>
    </form>
  </div>
</template>

<script>

export default {
  name: 'LoginForm',
  components: {
    MyInput
  },
  data() {
    return {
      email: '',
      password: ''
    }
  },
  methods: {
    submitForm() {
      axios.post('/login', {
        email: this.email,
        password: this.password
      })
      .then(response => {
        window.location.href = '/dashboard';
      })
      .catch(error => {
        console.log(error.los datos no coinciden.data);
    
      });
    }
  }
}
</script>

<style scoped>
.login-form {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form-group {
  margin-bottom: 20px;
}
</style>

</my-input>
@endsection