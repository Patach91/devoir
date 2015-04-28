class Agence < ActiveRecord::Migration
  def change
  	create_table :Donnees do |t|
  		t.string :nom
  		t.string :prenom
  		t.string :adress
  		t.string :pays
  end
end
end