<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class AUD1
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.que = New System.Windows.Forms.Label()
        Me.ans = New System.Windows.Forms.Label()
        Me.SuspendLayout()
        '
        'que
        '
        Me.que.BackColor = System.Drawing.Color.Transparent
        Me.que.Font = New System.Drawing.Font("Microsoft Sans Serif", 36.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.que.ForeColor = System.Drawing.Color.White
        Me.que.Location = New System.Drawing.Point(214, 218)
        Me.que.Name = "que"
        Me.que.Size = New System.Drawing.Size(959, 219)
        Me.que.TabIndex = 0
        Me.que.Text = "Who was the inventor of RADAR??"
        Me.que.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'ans
        '
        Me.ans.BackColor = System.Drawing.Color.Transparent
        Me.ans.Font = New System.Drawing.Font("Microsoft Sans Serif", 36.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.ans.ForeColor = System.Drawing.Color.White
        Me.ans.Location = New System.Drawing.Point(217, 524)
        Me.ans.Name = "ans"
        Me.ans.Size = New System.Drawing.Size(956, 125)
        Me.ans.TabIndex = 1
        Me.ans.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'AUD1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackgroundImage = Global.WindowsApplication1.My.Resources.Resources.audienceque
        Me.ClientSize = New System.Drawing.Size(1366, 768)
        Me.Controls.Add(Me.ans)
        Me.Controls.Add(Me.que)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Name = "AUD1"
        Me.Text = "Form25"
        Me.WindowState = System.Windows.Forms.FormWindowState.Maximized
        Me.ResumeLayout(False)

    End Sub
    Friend WithEvents que As System.Windows.Forms.Label
    Friend WithEvents ans As System.Windows.Forms.Label
End Class
