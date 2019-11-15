<template>
  <div>
    <a v-if="criar" :href="criar">Criar</a>

    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th v-for="titulo in titulos">{{titulo}}</th>
          <th v-if="detalhe || editar || deletar">Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in itens">
          <td v-for="i in item">{{i}}</td>

          <td v-if="detalhe || editar || deletar">
            <form v-if="deletar && token" v-bind:id="index" v-bind:action="deletar" method="post">
              <input type="hidden" name="_method" value="DELETE" />
              <input type="hidden" name="_token" :value="token" />

              <a v-if="editar" v-bind:href="editar">Editar |</a>
              <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>

              <a href="#" v-on:onclick="executaForm(index)">Deletar</a>
            </form>
            <span v-if="!token">
              <a v-if="editar" v-bind:href="editar">Editar |</a>
              <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
              <a href="#" v-on:onclick="executaForm(index)">Deletar</a>
            </span>
            <span v-if="token && !deletar">
              <a v-if="editar" v-bind:href="editar">Editar |</a>
              <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ["titulos", "itens", "criar", "detalhe", "editar", "deletar", "token"],
  methods: {
    executaForm: function(index) {
      document.getElementById(index).submit();
    }
  }
};
</script>
