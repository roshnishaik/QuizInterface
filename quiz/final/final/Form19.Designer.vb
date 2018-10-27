<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class scor4
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
        Me.b = New System.Windows.Forms.Label()
        Me.c = New System.Windows.Forms.Label()
        Me.d = New System.Windows.Forms.Label()
        Me.a = New System.Windows.Forms.Label()
        Me.SuspendLayout()
        '
        'b
        '
        Me.b.BackColor = System.Drawing.Color.Transparent
        Me.b.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.b.ForeColor = System.Drawing.Color.White
        Me.b.Location = New System.Drawing.Point(730, 243)
        Me.b.Name = "b"
        Me.b.Size = New System.Drawing.Size(373, 119)
        Me.b.TabIndex = 1
        Me.b.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'c
        '
        Me.c.BackColor = System.Drawing.Color.Transparent
        Me.c.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.c.ForeColor = System.Drawing.Color.White
        Me.c.Location = New System.Drawing.Point(247, 538)
        Me.c.Name = "c"
        Me.c.Size = New System.Drawing.Size(371, 118)
        Me.c.TabIndex = 3
        Me.c.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'd
        '
        Me.d.BackColor = System.Drawing.Color.Transparent
        Me.d.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.d.ForeColor = System.Drawing.Color.White
        Me.d.Location = New System.Drawing.Point(736, 529)
        Me.d.Name = "d"
        Me.d.Size = New System.Drawing.Size(367, 118)
        Me.d.TabIndex = 4
        Me.d.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'a
        '
        Me.a.BackColor = System.Drawing.Color.Transparent
        Me.a.Font = New System.Drawing.Font("Microsoft Sans Serif", 48.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.a.ForeColor = System.Drawing.Color.White
        Me.a.Location = New System.Drawing.Point(246, 243)
        Me.a.Name = "a"
        Me.a.Size = New System.Drawing.Size(372, 119)
        Me.a.TabIndex = 2
        Me.a.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'scor4
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackColor = System.Drawing.Color.FromArgb(CType(CType(0, Byte), Integer), CType(CType(64, Byte), Integer), CType(CType(0, Byte), Integer))
        Me.BackgroundImage = Global.WindowsApplication1.My.Resources.Resources.scores
        Me.ClientSize = New System.Drawing.Size(1366, 768)
        Me.Controls.Add(Me.d)
        Me.Controls.Add(Me.c)
        Me.Controls.Add(Me.a)
        Me.Controls.Add(Me.b)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Name = "scor4"
        Me.Text = "Form19"
        Me.WindowState = System.Windows.Forms.FormWindowState.Maximized
        Me.ResumeLayout(False)

    End Sub
    Friend WithEvents b As System.Windows.Forms.Label
    Friend WithEvents c As System.Windows.Forms.Label
    Friend WithEvents d As System.Windows.Forms.Label
    Friend WithEvents a As System.Windows.Forms.Label
End Class
