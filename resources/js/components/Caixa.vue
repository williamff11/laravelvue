<template>
  <div class="small-box bg-info" v-bind:style="defineCor">
    <div class="inner">
      <h3>{{ quantidade }}</h3>

      <p>{{ titulo }}</p>
    </div>
    <div class="icon">
      <i v-bind:class="icone"></i>
    </div>
    <a v-bind:href="url" class="small-box-footer">
      Ver Mais
      <i class="ion-arrow-right-a"></i>
    </a>


  </div>
</template>

<script>
export default {
  props: ['quantidade', 'titulo', 'url', 'cor', 'icone'],
          computed:{
          defineCor: function(){
            return "background-color: "+this.cor+" !important;"
          }
        }
};
</script>

<style media="screen">
.bg-info,
.bg-info > a {
  color: #fff !important;
}
.bg-info {
  background-color: #17a2b8 !important;
}

.small-box {
  border-radius: 0.25rem;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
  display: block;
  margin-bottom: 20px;
  position: relative;
}
.small-box:hover .icon>i.ion {
    font-size: 75px;
}
.small-box:hover {
    text-decoration: none;
}
.small-box>.small-box-footer:hover {
    background: rgba(0,0,0,.15);
    color: #fff;
}
.small-box:hover .icon>i {
    font-size: 95px;
}
.small-box > .inner {
  padding: 10px;
}
.small-box h3,
.small-box p {
  z-index: 5;
}
.small-box h3 {
  font-size: 2.2rem;
  font-weight: 700;
  margin: 0 0 10px 0;
  padding: 0;
  white-space: nowrap;
}
.small-box p {
  font-size: 12px;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
}
.small-box .icon {
  color: rgba(0, 0, 0, 0.15);
  z-index: 0;
}
.small-box .icon > i.ion {
  font-size: 70px;
  top: 20px;
}
.small-box .icon>i {
    font-size: 90px;
    position: absolute;
    right: 15px;
    top: 15px;
    -webkit-transition: all .3s linear;
    transition: all .3s linear;
}
.small-box > .small-box-footer {
  background: rgba(0, 0, 0, 0.1);
  color: rgba(255, 255, 255, 0.8);
  display: block;
  padding: 3px 0;
  position: relative;
  text-align: center;
  text-decoration: none;
  z-index: 10;
}
.bg-info,
.bg-info > a {
  color: #fff !important;
}
a:hover {
    color: #0056b3;
    text-decoration: none;
}
</style>
