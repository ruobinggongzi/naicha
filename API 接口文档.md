# 1.  API 接口文档

## 1.1. API V1 接口说明

- 接口基准地址：`http://tpadmin.test/api/`
- 服务端已开启 CORS 跨域支持
- 使用 HTTP Status Code 标识状态
- 数据返回格式统一使用 JSON

### 1.1.1. 支持的请求方法

- GET（SELECT）：从服务器取出资源（一项或多项）。
- 
- POST（CREATE）：在服务器新建一个资源。
- PUT（UPDATE）：在服务器更新资源（客户端提供改变后的完整资源）。
- PATCH（UPDATE）：在服务器更新资源（客户端提供改变的属性）。
- DELETE（DELETE）：从服务器删除资源。
- HEAD：获取资源的元数据。
- OPTIONS：获取信息，关于资源的哪些属性是客户端可以改变的。

### 1.1.2. 返回状态码code说明

| *状态码* | *含义*                | *说明*                                              |
| -------- | --------------------- | --------------------------------------------------- |
| 1        | OK                    | 请求成功                                            |
| 2        | CREATED               | 没有登录                                            |
| 204      | DELETED               | 删除成功                                            |
| 400      | BAD REQUEST           | 请求的地址不存在或者包含不支持的参数                |
| 401      | UNAUTHORIZED          | 未授权                                              |
| 403      | FORBIDDEN             | 被禁止访问                                          |
| 404      | NOT FOUND             | 请求的资源不存在                                    |
| 422      | Unprocesable entity   | [POST/PUT/PATCH] 当创建一个对象时，发生一个验证错误 |
| 500      | INTERNAL SERVER ERROR | 内部错误                                            |
|          |                       |                                                     |

------

## 1.2. 登录

### 1.2.1. 登录验证接口

- 请求路径：user
- 请求方法：get
- 请求参数

| 参数名 | 参数说明 | 备注 |
| ------ | -------- | ---- |
| 无参数 |          |      |

- 响应参数

| 参数名 | 参数说明     | 备注               |
| ------ | ------------ | ------------------ |
| code   | 状态码       | 1登录成功  2未登录 |
| msg    | 提示信息     |                    |
| url    |              |                    |
| data   | 登录人员信息 |                    |

- 响应数据

```json
{
    "code": 1,
    "msg": "",
    "data": {
        "id": 1,
        "username": "test"
    },
    "url": "http://localhost:8080/",
    "wait": 3
}
```

### 1.2.2. 登录接口

- 请求路径：login
- 请求方法：post
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| username | 用户名   |      |
| password | 密码     |      |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 1登录成功  0登录失败 |
| msg    | 提示信息     |                      |
| url    |              |                      |
| data   | 登录人员信息 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "登录成功",
  "data": {
    "session_id": "akemvcqn21dscu5bupg5sn5p7t", //注意，登录时将会额外得到一个session_id的数据
    "id": 1,
    "username": "test"
  },
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.2.3. 退出接口

- 请求路径：logout
- 请求方法：get
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| 无参数   |          |      |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2没有登录 1登录成功  0登录失败 |
| msg    | 提示信息     |                      |
| time   | 时间戳       |                      |
| data   | 登录人员信息 |                      |

- 响应数据

```json
{
  "code": 2,
  "msg": "您还没有登录。",
  "time": 1589960319,
  "data": ""
}
```

### 1.2.4. 注册接口

- 请求路径：register
- 请求方法：post
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| username   |  用户名  |      |
| password   |  密码     |      |
| email   |  邮箱    |      |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 1注册成功  0注册失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   | 登录人员信息 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "注册成功",
  "data": {
    "session_id": "lcccc49jgi6sslk8c0a6vfaf1u",
    "id": "2",
    "username": "a"
  },
  "url": "http://localhost:10086/",
  "wait": 3
}
```

## 1.3. 首页轮播图

### 1.3.1. 获取轮播图接口

- 请求路径：imglist
- 请求方法：get
- 请求参数

| 参数名 | 参数说明 | 备注 |
| ------ | -------- | ---- |
| 无参数 |          |      |

- 响应参数

| 参数名 | 参数说明       | 备注                   |
| ------ | -------------- | ---------------------- |
| code   | 状态码         | 0加载轮播图失败  1成功 |
| msg    | 提示信息       |                        |
| url    | 请求源地址     |                        |
| data   | 轮播图信息数组 |                        |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": [
    {
      "id": 74,
      "img": "http://tpadmin.test/static/uploads/goods/swiper/2023/06/07/3c84641bae55975d832c0811799f8790.jpeg"
    },
    {
      "id": 75,
      "img": "http://tpadmin.test/static/uploads/goods/swiper/2023/06/07/82bafa52a10301f12a0fdbcc18a09b40.jpeg"
    },
    {
      "id": 76,
      "img": "http://tpadmin.test/static/uploads/goods/swiper/2023/06/07/c64a91d34189e6c30338e1641afc3d03.jpeg"
    },
    {
      "id": 77,
      "img": "http://tpadmin.test/static/uploads/goods/swiper/2023/06/07/e897fd701f8e1ac3e9343decc94587d9.jpg"
    },
    {
      "id": 78,
      "img": "http://tpadmin.test/static/uploads/goods/swiper/2023/06/07/f6767cd26584670e3034084631d6e24f.jpeg"
    }
  ],
  "url": "http://localhost:10086/",
  "wait": 3
}
```

## 1.4. 分类功能

### 1.4.1. 获取分类信息接口

- 请求路径：category
- 请求方法：get
- 请求参数

| 参数名 | 参数说明 | 备注 |
| ------ | -------- | ---- |
| 无参数 |          |      |

- 响应参数

| 参数名 | 参数说明       | 备注                   |
| ------ | -------------- | ---------------------- |
| code   | 状态码         | 0加载轮播图失败  1成功 |
| msg    | 提示信息       |                        |
| url    | 请求源地址     |                        |
| data   | 分类信息数组 |                        |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": [
    {
      "id": 1,
      "image": "http://tpadmin.test/static/uploads/goods/swiper/2023/06/07/f6767cd26584670e3034084631d6e24f.jpeg",
      "name":"奶茶",
      "pid":0,
      "sub":[.....]
    },
    {
      "id": 10,
      "img": "http://tpadmin.test/static/uploads/goods/swiper/2023/06/07/82bafa52a10301f12a0fdbcc18a09b40.jpeg",
      "name":"果茶",
      "pid":0,
      "sub":[.....]
    },
    ......
  ],
  "url": "http://localhost:10086/",
  "wait": 3
}
```

## 1.5. 商品功能

### 1.5.1. 根据分类编号获取对应的商品列表

- 请求路径：goodslist
- 请求方法：get
- 请求参数

| 参数名 | 参数说明 | 备注 |
| ------ | -------- | ---- |
| category_id |  分类编号      |      |
| last_id | 最后一个商品的编号，默认为0 | |

- 响应参数

| 参数名 | 参数说明       | 备注                   |
| ------ | -------------- | ---------------------- |
| code   | 状态码         | 0失败  1成功 |
| msg    | 提示信息       |                        |
| url    | 请求源地址     |                        |
| data   | 商品列表数组 |                        |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": [
    {
      "id": 1,
      "goods_category_id": 2,
      "name": "商品1",
      "sell_point": "",
      "price": "18.00",
      "num": 200,
      "image": "http://tpadmin.test/static/uploads/goods/goods_image/1.png",
      "status": 1,
      "content": "",
      "album": "goods/goods_album/",
      "delete_time": null,
      "create_time": "2023-06-07 16:43:14",
      "update_time": "2023-06-07 16:46:00"
    },
    ......
  ],
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.5.2. 根据商品编号获取对应的商品详情

- 请求路径：goodsinfo
- 请求方法：get
- 请求参数

| 参数名 | 参数说明 | 备注 |
| ------ | -------- | ---- |
| id |  商品编号      |      |

- 响应参数

| 参数名 | 参数说明       | 备注                   |
| ------ | -------------- | ---------------------- |
| code   | 状态码         | 0失败  1成功 |
| msg    | 提示信息       |                        |
| url    | 请求源地址     |                        |
| data   | 商品详情       |                        |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": {
    "id": 107,
    "goods_category_id": 4,
    "name": "霸霸奶茶",
    "sell_point": "史上最贵，装X必备",
    "price": "50.00",
    "num": 2000,
    "image": "goods/goods_image/100.png",
    "status": 1,
    "content": "",
    "album": [
      {
        "id": 0,
        "img": "http://tpadmin.test/static/uploads/goods/goods_album/2020/05/23/c2a54987f506a38324db5e5765aefacc.jpg"
      },
      {
        "id": 1,
        "img": "http://tpadmin.test/static/uploads/goods/goods_album/2020/05/23/411e420d6e841901acf863f58e643c92.jpg"
      },
      {
        "id": 2,
        "img": "http://tpadmin.test/static/uploads/goods/goods_album/2020/05/23/cafdd63154d8c02051513b801cea84c9.jpg"
      },
      {
        "id": 3,
        "img": "http://tpadmin.test/static/uploads/goods/goods_album/2020/05/23/b036a8543786785368f724629866c025.jpg"
      },
      {
        "id": 4,
        "img": "http://tpadmin.test/static/uploads/goods/goods_album/2020/05/23/94d8a6dd1ddbd418c66d948b4b82cf51.jpg"
      }
    ],
    "delete_time": null,
    "create_time": "2020-05-23 17:31:50",
    "update_time": "2020-05-23 17:43:02"
  },
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.5.3. 根据多个商品编号获取对应的商品详情

- 请求路径：shopcart
- 请求方法：get
- 请求参数

| 参数名 | 参数说明 | 备注 |
| ------ | -------- | ---- |
| ids |  商品编号数组  |  [107]    |

- 响应参数

| 参数名 | 参数说明       | 备注                   |
| ------ | -------------- | ---------------------- |
| code   | 状态码         | 0失败  1成功 |
| msg    | 提示信息       |                        |
| url    | 请求源地址     |                        |
| data   | 商品详情       |                        |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": [
    {
      "id": 107,
      "goods_category_id": 4,
      "name": "iphone xs max",
      "sell_point": "史上最贵，装X必备",
      "price": "5000.00",
      "num": 2000,
      "image": "http://tpadmin.test/static/uploads/goods/goods_image/2020/05/23/9ceb72fbaa68c34c76ba9c492dd5b782.jpg",
      "status": 1,
      "content": "",
      "album": "goods/goods_album/2020/05/23/c2a54987f506a38324db5e5765aefacc.jpg|goods/goods_album/2020/05/23/411e420d6e841901acf863f58e643c92.jpg|goods/goods_album/2020/05/23/cafdd63154d8c02051513b801cea84c9.jpg|goods/goods_album/2020/05/23/b036a8543786785368f724629866c025.jpg|goods/goods_album/2020/05/23/94d8a6dd1ddbd418c66d948b4b82cf51.jpg",
      "delete_time": null,
      "create_time": "2023-06-07 17:31:50",
      "update_time": "2023-06-07 17:43:02"
    }
  ],
  "url": "http://localhost:10086/",
  "wait": 3
}
```

## 1.6. 收货地址管理

### 1.6.1 保存收货地址

- 请求路径：address/save
- 请求方法：post
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| name   | 收货人姓名  |      |
| tel   |  手机号码     |      |
| area   |  收货地址    |      |
| detail   |  详细地址    |      |
| id | 可选参数，如果有id表示做编辑操作，如果没有id参数表示做新增操作 | |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1保存成功  0保存失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   | 收货地址信息 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "添加成功",
  "data": {
    "id": "2"
  },
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.6.2 查询收货地址列表

- 请求路径：address
- 请求方法：get
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| 无参数   |   |      |


- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1查询成功  0查询失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   | 收货地址列表 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": [
    {
      "id": 2,
      "user_user_id": 1,
      "name": "张三",
      "tel": "13111111111",
      "area": "北京市-北京城区-东城区",
      "detail": "订单",
      "create_time": "2023-06-07 17:54:55",
      "update_time": null
    },
    {
      "id": 3,
      "user_user_id": 1,
      "name": "李四",
      "tel": "13222222222",
      "area": "山西省-太原市-小店区",
      "detail": "小店",
      "create_time": "2023-06-07 18:03:07",
      "update_time": null
    }
  ],
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.6.3 查询需要修改的收货地址信息

- 请求路径：address/edit
- 请求方法：get
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| id   | 收货地址id  |      |


- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1查询成功  0查询失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   | 收货地址信息 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": {
    "id": 2,
    "user_user_id": 1,
    "name": "张三",
    "tel": "13111111111",
    "area": "北京市-北京城区-东城区",
    "detail": "东城一小区",
    "create_time": "2023-06-07 17:54:55",
    "update_time": null
  },
  "url": "http://localhost:9999/",
  "wait": 3
}
```

### 1.6.4 根据id删除收货地址

- 请求路径：address/del
- 请求方法：post
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| id | 收货地址id | |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1删除成功  0删除失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   |  |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "删除成功",
  "data": "",
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.6.5 获取默认的收货地址

- 请求路径：address/def
- 请求方法：get
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| id | 可选参数，如果传递了id就获取id对应的收货地址，如果没有传递id就获取默认的收货地址 | |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1获取成功  0获取失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   | 默认地址信息 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": {
    "id": 3,
    "user_user_id": 1,
    "name": "李四有",
    "tel": "13212345678",
    "area": "山西省-太原市-小店区",
    "detail": "小店左边500米",
    "create_time": "2023-06-07 18:03:07",
    "update_time": null
  },
  "url": "http://localhost:10086/",
  "wait": 3
}
```

## 1.6. 订单管理

### 1.6.1 创建订单

- 请求路径：order/create
- 请求方法：post
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| address   | 收货地址id |      |
| note   |  备注信息     |      |
| goods   |  购买商品信息数组  |  [{"id":"109","count":5,"selected":true},{"id":"111","count":23,"selected":true}]    |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1创建成功  0创建失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   |  |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "订单创建成功",
  "data": "",
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.6.2 查询订单列表

- 请求路径：order/list
- 请求方法：get
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| 无参数   |  |      |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1查询成功  0查询失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   | 订单列表信息 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": [
    {
      "id": 3,
      "user_user_id": 1,
      "price": "8170.00",
      "address_name": "张三",
      "address_tel": "13111111111",
      "address_area": "内蒙古自治区-乌海市-乌达区",
      "address_detail": "那里",
      "note": "",
      "is_pay": 0,
      "is_cancel": 0,
      "create_time": "2023-06-07 15:53:50",
      "update_time": null,
      "user_order_goods": [
        {
          "id": 4,
          "user_order_id": 3,
          "goods_goods_id": 108,
          "count": 2,
          "price": "4000.00",
          "create_time": "2020-05-28 15:53:50",
          "update_time": null,
          "goods_goods": {
            "id": 108,
            "image": "http://tpadmin.test/static/uploads/goods/goods_image/2020/05/23/2243cf92f5302ed459c6010525ee9c6f.jpg"
          }
        },
        {
          "id": 5,
          "user_order_id": 3,
          "goods_goods_id": 111,
          "count": 17,
          "price": "10.00",
          "create_time": "2020-05-28 15:53:50",
          "update_time": null,
          "goods_goods": {
            "id": 111,
            "image": "http://tpadmin.test/static/uploads/goods/goods_image/2020/05/23/2243cf92f5302ed459c6010525ee9c6f.jpg"
          }
        }
      ]
    }
  ],
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.6.3 查询订单详情

- 请求路径：order/show
- 请求方法：get
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| id   | 订单id |      |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1查询成功  0查询失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   | 订单详情信息 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "",
  "data": {
    "id": 3,
    "user_user_id": 1,
    "price": "80.00",
    "address_name": "张三",
    "address_tel": "13111111111",
    "address_area": "内蒙古自治区-乌海市-乌达区",
    "address_detail": "那里",
    "note": "",
    "is_pay": 0,
    "is_cancel": 0,
    "create_time": "2023-06-07-05-28 15:53:50",
    "update_time": null,
    "user_order_goods": [
      {
        "id": 4,
        "user_order_id": 3,
        "goods_goods_id": 108,
        "count": 2,
        "price": "40.00",
        "create_time": "2023-06-07 15:53:50",
        "update_time": null,
        "goods_goods": {
          "id": 108,
          "name": "霸霸奶茶",
          "image": "http://tpadmin.test/static/uploads/goods/goods_image/2020/05/23/2243cf92f5302ed459c6010525ee9c6f.jpg"
        }
      },
      {
        "id": 5,
        "user_order_id": 3,
        "goods_goods_id": 111,
        "count": 17,
        "price": "10.00",
        "create_time": "2023-06-07 15:53:50",
        "update_time": null,
        "goods_goods": {
          "id": 111,
          "name": "珍珠奶茶",
          "image": "http://tpadmin.test/static/uploads/goods/goods_image/2020/05/23/2243cf92f5302ed459c6010525ee9c6f.jpg"
        }
      }
    ]
  },
  "url": "http://localhost:10086/",
  "wait": 3
}
```

### 1.6.4 取消订单

- 请求路径：order/cancel
- 请求方法：post
- 请求参数

| 参数名   | 参数说明 | 备注 |
| -------- | -------- | ---- |
| id   | 订单id |      |

- 响应参数

| 参数名 | 参数说明     | 备注                 |
| ------ | ------------ | -------------------- |
| code   | 状态码       | 2未登录  1取消成功  0取消失败 |
| msg    | 提示信息     |                      |
| url    | 请求源       |                      |
| data   | 订单详情信息 |                      |

- 响应数据

```json
{
  "code": 1,
  "msg": "取消成功",
  "data": "",
  "url": "http://localhost:10086/",
  "wait": 3
}
```
