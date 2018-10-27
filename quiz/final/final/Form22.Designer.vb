<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class ques5
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
        Me.components = New System.ComponentModel.Container()
        Me.que5 = New System.Windows.Forms.Label()
        Me.tea5 = New System.Windows.Forms.Label()
        Me.ans5 = New System.Windows.Forms.Label()
        Me.scr = New System.Windows.Forms.Label()
        Me.tl5 = New System.Windows.Forms.Timer(Me.components)
        Me.timer = New System.Windows.Forms.Label()
        Me.SuspendLayout()
        '
        'que5
        '
        Me.que5.BackColor = System.Drawing.Color.Transparent
        Me.que5.Font = New System.Drawing.Font("Microsoft Sans Serif", 27.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.que5.ForeColor = System.Drawing.Color.White
        Me.que5.Location = New System.Drawing.Point(134, 108)
        Me.que5.Name = "que5"
        Me.que5.Size = New System.Drawing.Size(809, 268)
        Me.que5.TabIndex = 1
        '
        'tea5
        '
        Me.tea5.BackColor = System.Drawing.Color.Transparent
        Me.tea5.Font = New System.Drawing.Font("Microsoft Sans Serif", 27.75!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.tea5.ForeColor = System.Drawing.Color.White
        Me.tea5.Location = New System.Drawing.Point(305, 487)
        Me.tea5.Name = "tea5"
        Me.tea5.Size = New System.Drawing.Size(308, 80)
        Me.tea5.TabIndex = 3
        Me.tea5.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'ans5
        '
        Me.ans5.BackColor = System.Drawing.Color.Transparent
        Me.ans5.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.ans5.ForeColor = System.Drawing.Color.White
        Me.ans5.Location = New System.Drawing.Point(131, 391)
        Me.ans5.Name = "ans5"
        Me.ans5.Size = New System.Drawing.Size(812, 80)
        Me.ans5.TabIndex = 4
        Me.ans5.TextAlign = System.Drawing.ContentAlignment.MiddleLeft
        '
        'scr
        '
        Me.scr.BackColor = System.Drawing.Color.Transparent
        Me.scr.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.scr.ForeColor = System.Drawing.Color.White
        Me.scr.Location = New System.Drawing.Point(302, 576)
        Me.scr.Name = "scr"
        Me.scr.Size = New System.Drawing.Size(311, 84)
        Me.scr.TabIndex = 5
        Me.scr.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'tl5
        '
        Me.tl5.Interval = 1000
        '
        'timer
        '
        Me.timer.BackColor = System.Drawing.Color.Transparent
        Me.timer.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.timer.ForeColor = System.Drawing.Color.White
        Me.timer.Location = New System.Drawing.Point(1017, 150)
        Me.timer.Name = "timer"
        Me.timer.Size = New System.Drawing.Size(195, 195)
        Me.timer.TabIndex = 6
        Me.timer.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'ques5
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackColor = System.Drawing.Color.Black
        Me.BackgroundImage = Global.WindowsApplication1.My.Resources.Resources.Round_5_rfquestions
        Me.ClientSize = New System.Drawing.Size(1366, 768)
        Me.Controls.Add(Me.timer)
        Me.Controls.Add(Me.scr)
        Me.Controls.Add(Me.ans5)
        Me.Controls.Add(Me.tea5)
        Me.Controls.Add(Me.que5)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Name = "ques5"
        Me.Text = "Form22"
        Me.WindowState = System.Windows.Forms.FormWindowState.Maximized
        Me.ResumeLayout(False)

    End Sub
    Friend WithEvents que5 As System.Windows.Forms.Label
    Friend WithEvents tea5 As System.Windows.Forms.Label
    Friend WithEvents ans5 As System.Windows.Forms.Label
    Friend WithEvents scr As System.Windows.Forms.Label
    Friend WithEvents tl5 As System.Windows.Forms.Timer
    Friend WithEvents timer As System.Windows.Forms.Label
End Class
