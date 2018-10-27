<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class domain1
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
        Me.que = New System.Windows.Forms.Label()
        Me.opa = New System.Windows.Forms.Label()
        Me.opb = New System.Windows.Forms.Label()
        Me.tl3 = New System.Windows.Forms.Timer(Me.components)
        Me.opc = New System.Windows.Forms.Label()
        Me.opd = New System.Windows.Forms.Label()
        Me.team3 = New System.Windows.Forms.Label()
        Me.scr4 = New System.Windows.Forms.Label()
        Me.timeee = New System.Windows.Forms.Label()
        Me.SuspendLayout()
        '
        'que
        '
        Me.que.BackColor = System.Drawing.Color.Transparent
        Me.que.Font = New System.Drawing.Font("Microsoft Sans Serif", 21.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.que.ForeColor = System.Drawing.Color.White
        Me.que.Location = New System.Drawing.Point(194, 105)
        Me.que.Name = "que"
        Me.que.Size = New System.Drawing.Size(978, 119)
        Me.que.TabIndex = 0
        '
        'opa
        '
        Me.opa.BackColor = System.Drawing.Color.Transparent
        Me.opa.Font = New System.Drawing.Font("Microsoft Sans Serif", 21.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.opa.ForeColor = System.Drawing.Color.White
        Me.opa.Location = New System.Drawing.Point(235, 276)
        Me.opa.Name = "opa"
        Me.opa.Size = New System.Drawing.Size(411, 73)
        Me.opa.TabIndex = 1
        '
        'opb
        '
        Me.opb.BackColor = System.Drawing.Color.Transparent
        Me.opb.Font = New System.Drawing.Font("Microsoft Sans Serif", 21.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.opb.ForeColor = System.Drawing.Color.White
        Me.opb.Location = New System.Drawing.Point(241, 402)
        Me.opb.Name = "opb"
        Me.opb.Size = New System.Drawing.Size(405, 73)
        Me.opb.TabIndex = 2
        '
        'tl3
        '
        Me.tl3.Interval = 1000
        '
        'opc
        '
        Me.opc.BackColor = System.Drawing.Color.Transparent
        Me.opc.Font = New System.Drawing.Font("Microsoft Sans Serif", 21.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.opc.ForeColor = System.Drawing.Color.White
        Me.opc.Location = New System.Drawing.Point(733, 276)
        Me.opc.Name = "opc"
        Me.opc.Size = New System.Drawing.Size(404, 73)
        Me.opc.TabIndex = 4
        '
        'opd
        '
        Me.opd.BackColor = System.Drawing.Color.Transparent
        Me.opd.Font = New System.Drawing.Font("Microsoft Sans Serif", 21.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.opd.ForeColor = System.Drawing.Color.White
        Me.opd.Location = New System.Drawing.Point(733, 405)
        Me.opd.Name = "opd"
        Me.opd.Size = New System.Drawing.Size(404, 70)
        Me.opd.TabIndex = 5
        '
        'team3
        '
        Me.team3.BackColor = System.Drawing.Color.Transparent
        Me.team3.Font = New System.Drawing.Font("Blue Highway D Type", 26.25!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.team3.ForeColor = System.Drawing.Color.White
        Me.team3.Location = New System.Drawing.Point(187, 570)
        Me.team3.Name = "team3"
        Me.team3.Size = New System.Drawing.Size(304, 65)
        Me.team3.TabIndex = 6
        Me.team3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'scr4
        '
        Me.scr4.BackColor = System.Drawing.Color.Transparent
        Me.scr4.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.scr4.ForeColor = System.Drawing.Color.White
        Me.scr4.Location = New System.Drawing.Point(193, 646)
        Me.scr4.Name = "scr4"
        Me.scr4.Size = New System.Drawing.Size(293, 73)
        Me.scr4.TabIndex = 7
        Me.scr4.Text = "0"
        Me.scr4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'timeee
        '
        Me.timeee.BackColor = System.Drawing.Color.Transparent
        Me.timeee.Font = New System.Drawing.Font("Agency FB", 48.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.timeee.ForeColor = System.Drawing.Color.White
        Me.timeee.Location = New System.Drawing.Point(854, 549)
        Me.timeee.Name = "timeee"
        Me.timeee.Size = New System.Drawing.Size(148, 142)
        Me.timeee.TabIndex = 8
        Me.timeee.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'domain1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackColor = System.Drawing.Color.White
        Me.BackgroundImage = Global.WindowsApplication1.My.Resources.Resources.Round_3_questions
        Me.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center
        Me.ClientSize = New System.Drawing.Size(1366, 768)
        Me.Controls.Add(Me.timeee)
        Me.Controls.Add(Me.scr4)
        Me.Controls.Add(Me.team3)
        Me.Controls.Add(Me.opd)
        Me.Controls.Add(Me.opc)
        Me.Controls.Add(Me.opb)
        Me.Controls.Add(Me.opa)
        Me.Controls.Add(Me.que)
        Me.ForeColor = System.Drawing.Color.White
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Name = "domain1"
        Me.Text = "Form14"
        Me.WindowState = System.Windows.Forms.FormWindowState.Maximized
        Me.ResumeLayout(False)

    End Sub
    Friend WithEvents que As System.Windows.Forms.Label
    Friend WithEvents opa As System.Windows.Forms.Label
    Friend WithEvents opb As System.Windows.Forms.Label
    Friend WithEvents tl3 As System.Windows.Forms.Timer
    Friend WithEvents opc As System.Windows.Forms.Label
    Friend WithEvents opd As System.Windows.Forms.Label
    Friend WithEvents team3 As System.Windows.Forms.Label
    Friend WithEvents scr4 As System.Windows.Forms.Label
    Friend WithEvents timeee As System.Windows.Forms.Label
End Class
