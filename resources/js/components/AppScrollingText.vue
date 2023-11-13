<script>
export default {
  name: 'AppScrollingText',
  data() {
    return {
      flag: 0,
      intervalId: null,
    };
  },
  mounted() {
    this.animate();
  },
  methods: {
    animate() {
      const text1 = document.getElementById("text1");
      const text2 = document.getElementById("text2");

      let text = '';
      for (let i = 1; i <= 10; i++) {
        text += `Black Friday Grandi Saldi! - 40%  ✶  Acquistando tre Profumi uno è Gratis!  ✶ `;
      }

      text1.innerHTML = text;
      text2.innerHTML = text;

      this.startScroll();

      text1.addEventListener('mouseover', this.stopScroll);
      text1.addEventListener('mouseout', this.startScroll);
      text2.addEventListener('mouseover', this.stopScroll);
      text2.addEventListener('mouseout', this.startScroll);
    },
    stopScroll() {
      clearInterval(this.intervalId);
    },
    startScroll() {
      const text1 = document.getElementById("text1");
      const text2 = document.getElementById("text2");
      this.intervalId = setInterval(() => {
        this.flag--;
        if (this.flag <= -text1.offsetWidth) {
          this.flag = 0;
        }
        text1.style.marginLeft = this.flag + "px";
        text2.style.marginLeft = (this.flag + text1.offsetWidth) + "px";
      }, 5);
    }
  }
};
</script>

<template>
  <div id="contain_text">
    <p class="scrollingtext" id="scrollingtext1">
      <span id="text1"></span>
      <span id="text2"></span>
    </p>
  </div>
</template>

<style scoped>
#contain_text {
  background: linear-gradient(to right, #706f6f, rgb(180, 180, 180));
  width: 100%;
  height: 70px;
  overflow: hidden;
  display: flex;
  align-items: center;
}

.scrollingtext {
  color: white;
  font-weight: bold;
  white-space: nowrap;
  clear: both;
  float: left;
  font-size: 17px;
  margin-top: 10px;
  display: flex;
}
</style>

