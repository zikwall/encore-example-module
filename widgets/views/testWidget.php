<div class="panel">
        <div class="back">
            <div class="panel-content">
                <h5 class="panel-title">
                    add widget to Sidebar
                </h5>
                <hr>
                <pre>
                    <code class="hljs php" style="">
zikwall\easyonline\modules\example\widgets\Sidebar::widget([
    'widgets' => [
        [
            \zikwall\easyonline\modules\example\widgets\TestWidget::className(), [],
            ['sortOrder' => 150]
        ],
    ]
]);
                    </code>
                </pre>
            </div>
        </div>
</div>
