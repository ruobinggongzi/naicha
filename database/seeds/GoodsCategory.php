<?php

use think\migration\Seeder;

class GoodsCategory extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $this->table('goods_category')->insert([
            ['id' => 1, 'pid' => 0, 'name' => '奶茶', 'sort' => 1],
            ['id' => 2, 'pid' => 1, 'name' => '珍珠奶茶', 'image' => 'goods/category_image/2019/05/15/f2efb0888bef8fd157f2f1c8755e6f80.png', 'sort' => 1],
            ['id' => 3, 'pid' => 1, 'name' => '茉莉奶绿', 'image' => 'goods/category_image/2019/05/15/953cfabd3bf5c3a482bbe9ac66c8fa21.jpg', 'sort' => 2],
            ['id' => 4, 'pid' => 1, 'name' => '血糯米奶茶', 'image' => 'goods/category_image/2019/05/15/b87144fdb530687b9558d921e83d48ab.jpg', 'sort' => 3],
            ['id' => 5, 'pid' => 1, 'name' => '波波奶茶', 'image' => 'goods/category_image/2019/05/15/670b2f18751fd29970efe26398391274.png', 'sort' => 4],
            ['id' => 6, 'pid' => 1, 'name' => '奥利奥奶茶', 'image' => 'goods/category_image/2019/05/15/a0e3ce31f804d56b14271a16dcbdc10b.png', 'sort' => 5],
            ['id' => 7, 'pid' => 1, 'name' => '红豆奶茶', 'image' => 'goods/category_image/2019/05/15/6bbf72a71c1bcf6e443d14fefedd103f.jpg', 'sort' => 6],
            ['id' => 8, 'pid' => 1, 'name' => '复古蛋糕奶茶', 'image' => 'goods/category_image/2019/05/15/58bfad062b532a1d3c42099f819068cb.png', 'sort' => 7],
            ['id' => 9, 'pid' => 1, 'name' => '芋泥啵啵奶茶', 'image' => 'goods/category_image/2019/05/15/9aeaf37dc32d926285f2fc3427de02df.jpg', 'sort' => 8],
            ['id' => 10, 'pid' => 0, 'name' => '家用电器', 'sort' => 2],
            ['id' => 11, 'pid' => 10, 'name' => '电水壶/热水瓶', 'image' => 'goods/category_image/2019/05/15/0a1e8b506b4bbe1a73f16d70b2eece7e.jpg', 'sort' => 1],
            ['id' => 12, 'pid' => 10, 'name' => '电压力锅', 'image' => 'goods/category_image/2019/05/15/aa69a3bcffcc52b0e365ca65243ec835.jpg', 'sort' => 2],
            ['id' => 13, 'pid' => 10, 'name' => '电饭煲', 'image' => 'goods/category_image/2019/05/15/f1c0cf688bcb91fe32b5c2a7906e6332.jpg', 'sort' => 3],
            ['id' => 14, 'pid' => 10, 'name' => '电磁炉', 'image' => 'goods/category_image/2019/05/15/253a5d721e376ecf3b1a5a06baa7a317.jpg', 'sort' => 4],
            ['id' => 15, 'pid' => 10, 'name' => '微波炉', 'image' => 'goods/category_image/2019/05/15/890e9fbcac4cd5ff338fea5dc2596540.jpg', 'sort' => 5],
            ['id' => 16, 'pid' => 10, 'name' => '电饼铛', 'image' => 'goods/category_image/2019/05/15/ccc6a23166e0a673309cb6759ef160b3.jpg', 'sort' => 6],
            ['id' => 17, 'pid' => 10, 'name' => '豆浆机', 'image' => 'goods/category_image/2019/05/15/fd4ba9365e03c0976e8cf22f78a902c2.jpg', 'sort' => 7],
            ['id' => 18, 'pid' => 10, 'name' => '多用途锅', 'image' => 'goods/category_image/2019/05/15/9b9f45fc1b08982f025cbe565c7ec008.jpg', 'sort' => 8],
            ['id' => 19, 'pid' => 0, 'name' => '电脑办公', 'sort' => 3],
            ['id' => 20, 'pid' => 19, 'name' => '轻薄本', 'image' => 'goods/category_image/2019/05/15/1ed760174279e3970e85217019c1edd0.png', 'sort' => 1],
            ['id' => 21, 'pid' => 19, 'name' => '游戏本', 'image' => 'goods/category_image/2019/05/15/5e4130cc28927665799c3379c78a1713.png', 'sort' => 2],
            ['id' => 22, 'pid' => 19, 'name' => '机械键盘', 'image' => 'goods/category_image/2019/05/15/e6c8697469c56055223756e39c60542a.jpg', 'sort' => 3],
            ['id' => 23, 'pid' => 19, 'name' => '组装电脑', 'image' => 'goods/category_image/2019/05/15/2544453b66d11ff24c626638dcb2565e.jpg', 'sort' => 4],
            ['id' => 24, 'pid' => 19, 'name' => '移动硬盘', 'image' => 'goods/category_image/2019/05/15/4a1926d760dfa56abdbd4ce97813acc3.jpg', 'sort' => 5],
            ['id' => 25, 'pid' => 19, 'name' => '显卡', 'image' => 'goods/category_image/2019/05/15/167b37c9ea36b8acc5ff9f1ff4a32f86.jpg', 'sort' => 6],
            ['id' => 26, 'pid' => 19, 'name' => '游戏台式机', 'image' => 'goods/category_image/2019/05/15/c0fd9e8be4fdb13e72838d21ff22b011.jpg', 'sort' => 7],
            ['id' => 27, 'pid' => 19, 'name' => '家用打印机', 'image' => 'goods/category_image/2019/05/15/d98333ee6fddf537ff755a0c90ab93b1.jpg', 'sort' => 8],
            ['id' => 28, 'pid' => 19, 'name' => '吃鸡装备', 'image' => 'goods/category_image/2019/05/15/9b042c5255371159de8d62216564a095.jpg', 'sort' => 9],

        ])->save();
    }
}
