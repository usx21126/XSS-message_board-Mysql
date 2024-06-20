<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单HTML</title>
</head>
<body>
 <img src="666.jpg" width="280" height="150">
                                                  <h1>卡塔尔世界杯留言板 </h1><form 
        action="./adduser.php"
        method="POST"
       ><table border="1" cellspacing="0px" cellpadding="0px">
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>密码:</td>
            <td><input type="password" name="userpass1"></td>
        </tr>
        <tr>
            <td>确认密码:</td>
            <td><input type="password" name="userpass2"></td>
        </tr>
        <tr>
            <td>性别：</td>
            <td><label for="mingzi">男</label><input type="radio"name="1" id="mingzi"><label for="mingzi2">女</label><input type="radio" name="1" id="mingzi2"></td>
        </tr>
        <tr>
            <td> 出生日期：</td>
            <td><select>
   
    <option selected="selected">2002</option>
    <opyion>1998</opyion>
    <opyion>1999</opyion>
    <opyion>2000</opyion>
    <opyion>2001</opyion>
    <opyion>2002</opyion>
    <option>2003</option>
    <option>2004</option>
<opyion>2005</opyion>
</select>年<select>
        <option selected="selected">1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
</select>月<select>
        <option selected="selected">1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
    </select>日</td>
        </tr>
         <tr>
            <td> 个人简介：</td>
            <td><input type="t" value="个人兴趣爱好，个人追求" maxlength="300" size="90"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" checked="checked">我同意会员注册条款和会员加入标准</td>
        </tr>
        <tr>
            <td>论坛承诺协议声明</td>
            <td>
        <h5>本人承诺：</h5>
             <ul>
                 <li>自觉遵守网络安全相关规定</li>
                 <li>我已满足18岁</li>
                 <li>自觉维护论坛环境</li>
             </ul>
            </td>
        </tr>
         <tr>
            <td></td>
            <h3><td><input type="submit" name="usersubmit" value="免费注册"></td><h3>
        </tr>
         <tr>
            <td></td>
            <td><a href="http://localhost/myx/login.php">我已注册，立即登录</td>
        </tr>
    </table>
</body>
</html>