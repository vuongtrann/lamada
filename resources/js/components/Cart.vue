 <template>
  <div>
    <span style="">
      <a href="/checkout" class="" style="color: white; font-size: medium"
        >MY CART &nbsp;<i class="ion-bag" style="font-size: 30px"></i
        ><sup style="font-size: 15px">{{ itemCount }}</sup></a
      >
    </span>
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      itemCount: "",
    };
  },
  mounted() {
    this.$root.$on("changeInCart", (item) => {
      this.itemCount = item;
    });
  },
  methods: {
    async getCartItemsOnPageLoad() {
      let response = await axios.post("/cart");
        this.itemCount = response.data.items
    },
  },
  created() {
    this.getCartItemsOnPageLoad();
  },
};
</script>
