<template>
  <div>
    <div class="form-group rigth">
      <input type="search" class="form-control mb-2" placeholder="Buscar" v-model="buscar" />
    </div>

    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th v-for="titulo in titulos">{{titulo}}</th>
          <th v-if="detalhe || editar || deletar">Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in lista">
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
    <div class="form-inline">
      <a v-if="criar" v-bind:href="criar">Criar</a>
    </div>
  </div>
</template>

<script>
export default {
  props: ["titulos", "itens", "criar", "detalhe", "editar", "deletar", "token"],
  data: function() {
    return {
      buscar: ""
    };
  },
  methods: {
    executaForm: function(index) {
      document.getElementById(index).submit();
    }
  },
  computed: {
    lista: function() {
      return this.itens.filter(res => {
        for (let i = 0; i < res.length; i++) {
          if ((res[i] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0) {
            return true;
          }
        }
        return false;
      });
      return this.itens;
    }
  }
};
</script>

<style media="screen">
.rigth {
  float: right;
}
</style>

