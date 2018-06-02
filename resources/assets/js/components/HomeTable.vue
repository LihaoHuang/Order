<template>
    <div class="col-xl-9 col-sm-12">
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> 美食餐廳
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="form-group">
                        <label for="keyword">搜尋</label>
                        <input type="text" class="form-control" name="keyword" v-model="keyword" placeholder="輸入查詢字串">
                    </div>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>店名</th>
                            <th>地址</th>
                            <th>我要訂購</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr is="store-row" v-for="data in pages" :info="data"></tr>
                        </tbody>
                    </table>
                    <bs-pagination inject="filtered" page="20" bar-num="10"></bs-pagination>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
</template>

<script>
    import StoreRow from './StoreRow.vue';
    import BsPagination from './BsPagination.vue';
    export default {
        name: "HomeTable",
        components: {
            'store-row': StoreRow,
            'bs-pagination': BsPagination
        },
        props: {
            rows: {
                required: true
            }
        },
        data(){
            return {
                data: this.rows,
                keyword: "",
                pages: {}
            }
        },
        computed: {
            filtered(){
                let tmp = this.data;
                if(this.keyword !== ""){
                    let key = this.keyword;
                    tmp = tmp.filter(function(row){
                        return row.address.includes(key);
                    });
                }
                return tmp;
            }
        },
        methods: {
            updatePages(data){
                this.pages = data;
            }
        },
        beforeMount(){
            this.$on('updatePages',this.updatePages);
        }
    }
</script>

<style scoped>

</style>