@include("admin.layout.head")
<div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>用户表</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                   
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                
                                <div role="grid" class="dataTables_wrapper form-inline" id="editable_wrapper"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="editable_length"></div></div><div class="col-sm-6"><div id="editable_filter" class="dataTables_filter"><label>查找：<input type="search" class="form-control input-sm" aria-controls="editable"></label></div></div></div><table id="editable" class="table table-striped table-bordered table-hover  dataTable" aria-describedby="editable_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" style="width: 146px;" aria-sort="ascending" aria-label="渲染引擎：激活排序列升序">ID</th><th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" style="width: 252px;" aria-label="浏览器：激活排序列升序">用户名</th><th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" style="width: 221px;" aria-label="平台：激活排序列升序">性别</th><th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" style="width: 97px;" aria-label="引擎版本：激活排序列升序">年龄</th><th class="sorting" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" style="width: 91px;" >操作</th></tr>
                                    </thead>
                                    <tbody>
                                    <tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 1.0</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 1.5</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 2.0</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Firefox 3.0</td>
                                            <td class=" ">Win 2k+ / OSX.3+</td>
                                            <td class="center ">1.9</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Camino 1.0</td>
                                            <td class=" ">OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Camino 1.5</td>
                                            <td class=" ">OSX.3+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape 7.2</td>
                                            <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape Browser 8</td>
                                            <td class=" ">Win 98SE+</td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Netscape Navigator 9</td>
                                            <td class=" ">Win 98+ / OSX.2+</td>
                                            <td class="center ">1.8</td>
                                            <td class="center ">A</td>
                                        </tr><tr class="gradeA even">
                                            <td class="sorting_1">Gecko</td>
                                            <td class=" ">Mozilla 1.0</td>
                                            <td class=" ">Win 95+ / OSX.1+</td>
                                            <td class="center ">1</td>
                                            <td class="center ">A</td>
                                        </tr></tbody>
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">渲染引擎</th><th rowspan="1" colspan="1">浏览器</th><th rowspan="1" colspan="1">平台</th><th rowspan="1" colspan="1">引擎版本</th><th rowspan="1" colspan="1">CSS等级</th></tr>
                                    </tfoot>
                                </table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="editable_info" role="alert" aria-live="polite" aria-relevant="all">显示 1 到 10 项，共 57 项</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="editable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="editable" tabindex="0" id="editable_previous"><a href="#">上一页</a></li><li class="paginate_button active" aria-controls="editable" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="editable" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="editable" tabindex="0" id="editable_next"><a href="#">下一页</a></li></ul></div></div></div></div>

                            </div>
                        </div>
                    </div>
                </div>
@include("admin.layout.foot")