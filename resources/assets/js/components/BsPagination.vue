<template>
    <div class='form-inline'>
        <div class='form-group'>
            <ul class='pagination pagination-sm'>
                <li class='page-item' :class='{disabled: prevBtn}'><a class='page-link' @click='prev'>&laquo;上一頁</a></li>
                <li class='page-item' v-for='n in max' :class='{active: equal(n)}' v-show='show(n)'><a class='page-link' :id=n @click='set'>{{ n }}</a></li>
                <li class='page-item' :class='{disabled: nextBtn}'><a class='page-link' @click='next'>下一頁&raquo;</a></li>
                <li class='page-item disabled'><a disabled='true'>一頁顯示最多 <span style='font-weight: bold; color:orangered;'>{{ divided }}</span>
                    筆 / 共 {{ max }} 頁</a></li>
            </ul>
        </div>
        <div class='form-group'>
            <input type='text' class='form-control' v-model='jump' @keyup.enter='transport' placeholder='輸入頁碼，並按下確認鍵'/>
        </div>
    </div>
</template>

<script>
    export default {
        name: "bs-pagination",
        props: [
            'inject',
            'page', // set number of row  per pages.
            'barNum', // set number of navigation bars below.
        ],
        data: function () {
            return {
                now: 1,
                divided: this.page,
                bar_num: this.barNum,
                jump: ""
            };
        },
        computed: {
            resource() {
                return this.$parent[this.inject];
            },
            max() {
                return Math.ceil(Object.values(this.resource).length / this.divided);
            },
            nextBtn() {
                return this.now === this.max;
            },
            prevBtn() {
                return this.now === 1;
            },
            pages() {
                let now = this.now;
                let divided = this.divided;
                return Object.values(this.resource).filter(function (row, key) {
                    return (now - 1) * divided <= key && key <= (now * divided) - 1; // 0 ~ 19 / 20 ~39
                });
            }
        },
        methods: {
            next() {
                if (this.now !== this.max) this.now++;
            },
            prev() {
                if (this.now !== 1) this.now--;
            },
            set(e) {
                this.now = parseInt(e.target.id);
            },
            equal(id) {
                return this.now === id;
            },
            show(id) {
                let range = Math.ceil(this.bar_num / 2) - 1;
                if (this.now <= Math.ceil(this.bar_num / 2)) {
                    return id <= this.bar_num;
                } else if (this.now > (this.max - range)) {
                    return id > this.max - this.bar_num;
                }
                return this.now - range <= id && id <= this.now + range;
            },
            transport() {
                let jump = parseInt(this.jump);
                if (isNaN(jump) || jump < 1) this.now = 1;
                else if (jump > this.max) this.now = this.max;
                else this.now = jump;
                this.jump = "";
            }
        },
        updated() {
            if (this.now > this.max || this.now === 0) this.now = 1;

            this.$parent.$emit('updatePages', this.pages);
        },
        mounted() {
            this.$parent.$emit('updatePages', this.pages);
        }
    }
</script>

<style scoped>

</style>